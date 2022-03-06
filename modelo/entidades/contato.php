<?php

	class Contato{
		
		private $id;
		private $nome;
		private $email;
		private $mensagem;
		
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getId(){
			return $this->id;
		}
		
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		
		public function setMensagem($mensagem){
			$this->mensagem = $mensagem;
		}
		
		public function getMensagem(){
			return $this->mensagem;
		}
		
		
	}
	
?>