<?php
session_start();
include "conexion.php";
$re=mysql_query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysql_error());
	while ($row=mysql_fetch_array($re)) {
		$arreglo[]=array('usuario'=>$row['Usuario'],
			'password'=>$row['Password'],'rol'=>$row['Rol']);
	}
	if(isset($arreglo)){

		$_SESSION['Usuario']=$arreglo;
		if($_SESSION['Usuario']['rol']=='admin'){
			header('location:admin.php');
		}else{
			header('location:admin.php');
			
		}
		
		

		
	}else{
		header("Location: login.php?error=datos no validos");
	}
?>