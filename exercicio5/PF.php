<?php
	include_once('Cliente.php');
	class PF extends Cliente{

		private $nome;
		private $cpf;

	    function __construct($nome) {
     	  	parent::__construct();
     	  	$this->nome = $nome;
	    }	

		public function efetuarVenda() {
			echo $this->nome;
			echo $this->tel;
		}


	}
?>