<?php 
 class claseconexion extends PDO { 
   private $tipo_de_base = 'mysql';
   private $host = 'localhost:3306';
   private $nombre_de_base = 'sis_inventario';
   private $usuario = 'root'; 
   private $contrasena = 'root'; 
   public function __construct() { 
      try{
         parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};", $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
 } 
?>