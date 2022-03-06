<?php

include_once '../../modelo/modelcontato.php';

function listarContatos(){
	
	$modelContato = new ModelContato();
	$listarContatos = $modelContato->listarTodos();
	
	return $listarContatos;
}
?>