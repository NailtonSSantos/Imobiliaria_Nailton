<?php
include_once '../../config/URL.php';

function verificaPermissao()
{
	return true;

}

	define('SOBRE', 1);
	define('CASAS', 2);
	define('CONTATO', 3);
	define('SAIR', 4);
	
	if (verificaPermissao()){
		$menu = (int)$_GET['menu'];
		switch ($menu){
			case SOBRE:
				header("Location: ".BASE_URL . 'visao/adm/sobreadm.php');
				exit();
			case CASAS:
				header("Location: ".BASE_URL . 'visao/adm/casasadm.php');
				exit();
			case CONTATO:
				header("Location: ".BASE_URL . 'visao/adm/contatoadm.php');
				exit();
			case SAIR:
				session_unset();
				header("Location: ".BASE_URL . 'visao/inicial.php');
				exit();
			default:
				header("Location: ".BASE_URL . 'visao/adm/contatoadm.php');
				exit();
		}
	} else {
		session_unset();
		header("Location: ".BASE_URL . 'visao/inicial.php');
		exit();
	}
?>