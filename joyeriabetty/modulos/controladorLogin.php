<?php

require_once '../clases/login.php';
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$login = new Login($usuario,$pass);

$login->validar();

if (@$_SESSION['validada'] == "SI") {
	echo "
		<script languaje='javaScript'>
		alert('Bienvenido ". $_SESSION['nombre_completo']."');
		document.location='../index.php';
		</script>";
}else{
	echo "
		<script languaje='javaScript'>
		alert('Usuario y/o contraseña incorrectos');
		document.location='../index.php';
		</script>";
}

?>