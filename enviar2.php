<?php

if (isset($_POST['submit']))  {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'almaguero95@gmail.com';
$asunto = 'Mensaje de mi sitio web';

$mail = mail($para, $asunto, utf8_decode($message), $header);

if ($mail) {
    $message = "Mail Enviado con Exito!";
    echo "<script type='text/javascript'>alert('$message');</script>";
header("Location:index.html");
} else {
    alert "no mail";
}

}
?>