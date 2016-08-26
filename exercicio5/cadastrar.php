<?php 

	include_once('Cliente.php');
	include_once('PF.php');
	include_once('PJ.php');
	
	$nome = "Eduardo";
	$email = "email@email.com";
	$cpf = $_POST['cpf'];
	$cnpj = $_POST['cnpj'];
	$phone = $_POST['phone'];

	$cliente = new Cliente($phone, $email);
	$pf = new PF($phone, $email, $nome);
	$pj = new PJ();

	
	$pf->efetuarVenda();

?>