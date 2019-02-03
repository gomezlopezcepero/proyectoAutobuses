<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="estilos.css" />
<meta charset="utf-8">
<title>Documento sin título</title>

</head>


<body>



<div id="menu">
<ul>

 <a href="/autobuses/contacto.html"><li id="contac">Contacto</li></a>
  <a href="/autobuses/index.html"><li id="inicio">INICIO</li></a>
 <a href="/autobuses/acerca.html"><li id="cerca">A cerca de</li></a>

</ul>
</div>


<div id="logo">
	<a href="/autobuses/index.html"><img src="buse.png" width="200px" height="64px" alt=""/></a>
</div>


<hr id="barra">

<h1 class="titulo">Bus<span>Help</span></h1>


<img src="nevada.jpg" id="video_background" alt=""/>

<?php
//Importamos las variables del formulario de contacto

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);

@$mensaje = addslashes($_POST['mensaje']);



$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "gomezlopezcepero@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"

. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido )) {

//Si el mensaje se envia muestra una confirmacion
die("<h2>Gracias, su mensaje se envio correctamente.</h2>");
}else{
//Si el mensaje no se envia muestra el mensaje de error
die("Error: Su informacion no pudo ser enviada, intente mas tarde");
}
?>



</body>
</html>