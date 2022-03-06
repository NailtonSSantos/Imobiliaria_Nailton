<?php
include_once 'conexao.php';
include_once 'entidades/contato.php';

class ModelContato {
	
	public function inserir(Contato $contato){
		
		$nome = $contato->getNome();
		$telefone = $contato->getTelefone();
		$email = $contato->getEmail();
		$mensagem = $contato->getMensagem();
		
		AbrirConexao();
		
		$query = "insert into contato values(null, '$nome', '$telefone', '$email', '$mensagem');";
		
		mysql_query($query);
		$numLinha = mysql_affected_rows();
		
		FecharConexao();
		return $numLinha;
	}
	
	public function listarTodos(){
		AbrirConexao();
		$query = "select * from contato;";
		$executa = mysql_query($query);
		while ($row = mysql_fetch_assoc($executa)){
			$resultado[] = $row;
		}
		FecharConexao();
		
		if (isset($resultado)){
			$listaRetorno = array();
			foreach ($resultado as $row){
				$contato = new Contato();
				$contato->setId($row['id']);
				$contato->setNome($row['nome']);
				$contato->setTelefone($row['telefone']);
				$contato->setEmail($row['email']);
				$contato->setMensagem($row['mensagem']);
				$listaRetorno[] = $contato;
			}
			
		return $listaRetorno;
		
		}else{
			$erro = 'Não Foram encontados registros!';
			return $erro;
		}
	}
}
?>