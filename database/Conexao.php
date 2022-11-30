<?php
	$servidor ="";
	$login = "root";
	$senha = "teste123";
	$database = "meubanco";

	$conexao = new mysqli($servidor, $usuario, $senha, $database); 

	if(mysqli_connect_erro()){
		printf("Houve um erro ao tentar se conectar: %s\n", mysqli_connect_erro());
		exit();
	}