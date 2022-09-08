<?php
	include '2_trycatch.php';
	
	//$query = "insert into teste (nome, email) values ('Lucas', 'lucas@gmail.com')";
	
	$query ="UPDATE  teste SET nome = 'Lucas A' where id = 9";
	$query ="DELETE FROM `teste` WHERE `teste`.`id` = 9";
	
	$sql = $conexao->prepare($query);
	$resultado = $sql->execute();
?>