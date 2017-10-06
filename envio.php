<?php
require('_lib/class.phpmailer.php');//Paquete propio del sistema para enviar correos

 if(isset($_POST['submit']))
 {
 $name = $_POST['inputName'];
 $email = $_POST['inputEmail'];
 $query = $_POST['inputMessage'];
 $email_from = $name.'<'.$email.'>';
 $subject = $_POST['inputSubject'];

 $message="   
  Nombre:
  $name     
  
  Correo:
  $email     
  
  Mensaje:
  $query    
 ";

 $mail = new PHPMailer;

 $mail->isSMTP(); 
 $mail->SMTPAuth = true; 

 $mail->Host = 'smtp.gmail.com';  //Se especifica el servidor
 $mail->Username = 'ejemplo@gmail.com';    // Correo 
 $mail->Password = 'contraseña';  // Contraseña 
 $mail->SMTPSecure = 'ssl';   
 $mail->Port = 465; 

 $mail->addAddress('ejemplo@gmail.com', 'Nombre');
 $mail->From = $email;
 $mail->FromName = $name;
 $mail->Subject = $subject;
 $mail->Body    = "$message";
 if(!$mail->send()) {
  header("Location:contact.php?msg=Error al enviar mensaje !");
 } else {
  header("Location:contact.php?msg=Envio exitoso. ¡Gracias por contactarnos!");
 }
 }


?>