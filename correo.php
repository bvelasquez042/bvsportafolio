	<?php 

	$destinatario = 'thetrejo.2011@gmail.com';
	
	$nombre	= $_POST['nombre'];
	$email = $_POST['email'];
	$contenido = $_POST['contenido'];

	$header = "Enviado desde PORTAFOLIO BVS";
	$mensajeCompleto = $contenido . "\nAtentamente" . $nombre;

	@mail($destinatario, $mensajeCompleto, $header);

	echo "<script> alert('Correo enviado correctamente')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

 ?>
