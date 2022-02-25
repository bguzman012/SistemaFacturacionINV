<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];
$tel = $_POST['telefono'];




$header = "From: bryamgmfn@gmail.com"."\r\n";
$header .= "Reply-To: bryamgmfn@gmail.com"."\r\n";
$header .= "X-Mailer: PHP/" . phpversion();

$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido;
$para = 'bryamgmfn@gmail.com';
$asunto = 'Mensaje de mi sitio web';

$mail = @mail($para, $asunto, $mensaje, $header);

if($mail){
    header("Location:Mensaje.php");
}else{
    header("Location:MensajeError.php");
            }
?>