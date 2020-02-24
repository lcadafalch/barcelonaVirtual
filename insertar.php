<?php

$conexion=mysqli_connect('localhost','root','','formularioBarcelonaDigital');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$repetirEmail=$_POST['repetirEmail'];
$DNI=$_POST['DNI'];
$movil=$_POST['movil'];

$sql ="INSERT into usuarios(nombre,apellido,email,repetirEmail,DNI,movil)
     values('$nombre','$apellido','$email','$repetirEmail','$DNI','$movil')";
     echo mysqli_query($conexion,$sql);

?>