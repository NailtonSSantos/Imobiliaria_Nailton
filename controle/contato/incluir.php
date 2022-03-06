<?php

include_once '../../modelo/modelcontato.php';
require '../../config/URL.php';
	
	$post = $_POST;
	
	$contato = new Contato();
	$contato->setNome($post['nome']);
	$contato->setTelefone($post['telefone']);
	$contato->setEmail($post['email']);
	$contato->setMensagem($post['mensagem']);
	
	$modelContato = new ModelContato();
	$retorno = $modelContato->inserir($contato);
	
	if ($retorno > 0){
		echo '<script>alert("Mensagem Enviada!");</script>';
	}
	else {
		echo '<script>alert("FALHA: TENTE NOVAMENTE!");</script>';
	}
	
	echo '<script>window.location.href=" ' . BASE_URL . 'visao/contato.php' . '";</script>';

?>