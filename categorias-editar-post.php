<?php require_once("global.php"); ?>
<?php

	try{ 
	$id = $_POST['id'];
	$nome = $_POST['nome'];

	$categoria = new Categoria($id);
	$categoria->nome = $nome;

	$categoria->atualizar();
	header("Location:/phpPdo/categorias.php");
	die();
	} catch(Exception $e){
		Erro::trataErro($e);
	}