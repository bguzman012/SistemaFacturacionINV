<?php
include_once("capadatos/claseconexion.php");
class claseadministrador
{
	public $cedula;
	public $password;
	public $nombres_adm;
	public $apellidos_adm;
	public $email;
	
	public function listarusuario()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from administrador;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into administrador (cedula, password, nombres_adm, apellidos_adm, email) values (:cedula, :password, :nombres_adm, :apellidos_adm, :email);");
		$consulta->bindParam(":cedula", $this->cedula,PDO::PARAM_STR);
		$consulta->bindParam(":password", $this->password,PDO::PARAM_STR);
		$consulta->bindParam(":nombres_adm", $this->nombres_adm,PDO::PARAM_STR);
		$consulta->bindParam(":apellidos_adm", $this->apellidos_adm,PDO::PARAM_STR);
		$consulta->bindParam(":email", $this->email,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from administrador where cedula = :cedula;");
		$consulta->bindParam(":cedula", $this->cedula,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update administrador set email=:email, password=:password, nombres_adm=:nombres_adm, apellidos_adm=:apellidos_adm where cedula=:cedula;");
		$consulta->bindParam(":email", $this->email,PDO::PARAM_STR);
		$consulta->bindParam(":password", $this->password,PDO::PARAM_STR);
		$consulta->bindParam(":nombres_adm", $this->nombres_adm,PDO::PARAM_STR);
		$consulta->bindParam(":apellidos_adm", $this->apellidos_adm,PDO::PARAM_STR);
		$consulta->bindParam(":cedula", $this->cedula,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from administrador where cedula = :cedula;");
		$consulta->bindParam(":cedula", $this->cedula,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
	}

	function ingresar()
	{
		
		
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from administrador where email=:email and password=:password");
		$consulta->bindParam(":email", $this->email,PDO::PARAM_STR);
		$consulta->bindParam(":password", $this->password,PDO::PARAM_STR);
		$consulta->execute();
		$arr=$consulta->fetch();
		//$_SESSION["nombres_adm"]= $arr["nombres_adm"] . " " . $arr["apellidos_adm"];
		//$_SESSION["foto"]= $arr["foto"];
		return $arr;
		$consulta->close();
	}	
	
		protected function validarinicial($cedula, $caracteres)
    {
        if (empty($cedula)) {
            throw new Exception('Valor no puede estar vacio');
        }
        if (!ctype_digit($cedula)) {
            throw new Exception('Valor ingresado solo puede tener dígitos');
        }
        if (strlen($cedula) != $caracteres) {
            throw new Exception('Valor ingresado debe tener '.$caracteres.' caracteres');
        }
        return true;
    }
	
	 protected function validarcodigoprovincia($cedula)
    {
        if ($cedula < 0 OR $cedula > 24) {
            throw new Exception('Codigo de Provincia (dos primeros dígitos) no deben ser mayor a 24 ni menores a 0');
        }
        return true;
    }
	
	 protected function validartercerdigito($cedula, $tipo)
    {
        switch ($tipo) {
            case 'cedula':
            case 'ruc_natural':
                if ($cedula < 0 OR $cedula > 5) {
                    throw new Exception('Tercer dígito debe ser mayor o igual a 0 y menor a 6 para cédulas y RUC de persona natural');
                }
                break;
            case 'ruc_privada':
                if ($cedula != 9) {
                    throw new Exception('Tercer dígito debe ser igual a 9 para sociedades privadas');
                }
                break;
            case 'ruc_publica':
                if ($cedula != 6) {
                    throw new Exception('Tercer dígito debe ser igual a 6 para sociedades públicas');
                }
                break;
            default:
                throw new Exception('Tipo de Identificación no existe.');
                break;
        }
        return true;
    }
	
	 protected function algoritmoModulo10($digitosIniciales, $digitoVerificador)
    {
        $arrayCoeficientes = array(2,1,2,1,2,1,2,1,2);
        $digitoVerificador = (int)$digitoVerificador;
        $digitosIniciales = str_split($digitosIniciales);
        $total = 0;
        foreach ($digitosIniciales as $key => $value) {
            $valorPosicion = ( (int)$value * $arrayCoeficientes[$key] );
            if ($valorPosicion >= 10) {
                $valorPosicion = str_split($valorPosicion);
                $valorPosicion = array_sum($valorPosicion);
                $valorPosicion = (int)$valorPosicion;
            }
            $total = $total + $valorPosicion;
        }
        $residuo =  $total % 10;
        if ($residuo == 0) {
            $resultado = 0;
        } else {
            $resultado = 10 - $residuo;
        }
        if ($resultado != $digitoVerificador) {
            throw new Exception('Dígitos iniciales no validan contra Dígito Idenficador');
        }
        return true;
    }
	
	function validarcedula($cedula='')
    {
        $cedula = (string)$cedula;
        try {
            $this->validarinicial($cedula, '10');
            $this->validarcodigoprovincia(substr($cedula, 0, 2));
            $this->validartercerdigito($cedula[2], 'cedula');
            $this->algoritmomodulo10(substr($cedula, 0, 9), $cedula[9]);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}	

?>