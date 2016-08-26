<?php
    include_once('Cliente.php');

	class PJ extends Cliente {

		private $razaoSocial;
		private $cnpj;

		public function validarCnpj($cnpj) {
			echo $cnpj;
		}


	}
?>