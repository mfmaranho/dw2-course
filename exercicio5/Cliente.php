<?php
	class Cliente {

		private $tel;
		private $email;

	    function __construct($phone, $email) {
	    	$this->tel = $phone;
	    	$this->email = $email;
        }

		public function efetuarVenda() {
			echo "Venda efetuada";
		}


	}
?>