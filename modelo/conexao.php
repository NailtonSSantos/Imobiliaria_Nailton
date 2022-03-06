<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	function AbrirConexao()
	{
		$servidor = 'localhost';
		$usuario = 'mega';
		$senha = '12345';
		$banco = 'imobiliaria_nailton';
		
		$con = mysql_connect($servidor, $usuario, $senha);
		mysql_select_db($banco);		
	}
	
	function FecharConexao()
	{
		mysql_close();
	}
?>