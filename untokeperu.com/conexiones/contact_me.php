<?php
// Verifique si hay campos vacíos
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Sin argumentos proporcionados!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Crea el correo electrónico y envía el mensaje
$to = 'victor.miranda374@gmail.com'; // Agregue su dirección de correo electrónico entre el '' reemplazo de sunombre@sudominio.com - Aquí es donde el formulario le enviará un mensaje.
$email_subject = "Website Contact Form:  $name";
$email_body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // Esta es la dirección de correo electrónico desde la que se generará el mensaje. Recomendamos usar algo como noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
