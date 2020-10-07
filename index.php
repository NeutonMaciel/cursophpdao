<?php
	require_once("config.php");
	require_once("class/Sql.php");
	require_once("class/usuario.php");



//	$root = new Usuario();
//	$root->loadById(3);
//	echo $root;

//	$lista=Usuario::getList();

//	$search = Usuario::search("jo");
//	echo json_encode($search);

	$usuario=new Usuario();
	$usuario->login("root","!@#$%");

	echo $usuario;
?>