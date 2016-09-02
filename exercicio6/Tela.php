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

		public function getLabel($label){
			echo 
<<<TEXT
				<div>
					<label for='ex'>$label</label>
	
TEXT;
		}

		public function getButton($name, $value, $type){
						echo 
<<<TEXT
				<div>
					<button type=$type value=$value>$name</label>	
				</div>
TEXT;

		}

		public function getSelect($values){
			$sel = "<select>"
			for $i = 0; $i < $values.length; $i++{
				
			}
			$sel .= 

		}


	}
?>