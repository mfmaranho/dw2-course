<?php
	class Tela {

		private $titulo;

	    function __construct() {

        }

		public function getInputText($label, $name) {
			echo 
<<<TEXT
				<div>
					<label for='ex'>$label</label>
					<input type='text' name=$name />	
				</div>
TEXT;
		}

		public function getForm($pa, $pm, $fim = 1) {
			if($fim) {
				echo "</form></div>"
			} else {
				echo 
<<<HTML				
					<div>
						<form action=$pa method=$pm>
HTML;						
					
			}

		}

		public function getLabel(){

		}

		public function getButton(){

		}

		public function getSelect(){
			
		}


	}
?>