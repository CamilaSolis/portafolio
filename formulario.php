<?php
  error_reporting(0);
  $name=$_POST['name'];
  $email=$_POST['email'];
  $affair=$_POST['affair'];
  $message=$_POST['message'];

  $mensaje .= "Este mansage fue enviado por" .$name . " \r\n";
  $mensaje .= "Su e-mail es: " .$email . " \r\n";
  $mensaje .="Por motivo de: " .$affair . " \r\n";
  $mensaje .="Y su mensaje es: " .$message . " \r\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());

  $para = 'camila.s.diseno@gmail.com';
  $asunto = 'Correo de la pagina portafolio';

  mail($para, $asunto, utf8_decode($mensaje));
  echo 'Mensaje enviado correctamente';
?>