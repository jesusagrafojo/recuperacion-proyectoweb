<?php
$destino="agrafojolarraldejesusjavier@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "nombre: ".$nombre . 
"correo : " . $correo . "telefono: ". $telefono . "mensaje: " .$mensaje;
mail(~$destino,"contacto", $contenido);
header("location:contacto.html")









?>