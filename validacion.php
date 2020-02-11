<?php
session_start();
if(isset($_POST['Entrar'])){
	$usuario = $_POST['txtuser'];
	$password = $_POST['txtpassword'];

	if($usuario == 'administrador' && $password == 'administrador'){
	   echo '<script>
		alert("Bienvenido Administrador");
		</script>';
		header("location: admin.html");
	   
	}
	else{
		if($usuario == 'comprador' && $password == 'comprador'){
		header("location: cong.html");
		}
		else{
		echo '<script>
		alert("Datos erroneos");
		window.location.replace("index.html");
		</script>';
		}
}
}
?>