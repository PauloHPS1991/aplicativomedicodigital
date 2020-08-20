<?php
	include "conexao.php";
	
	$sql_read = "SELECT * FROM `medico` WHERE especialidade = 'Reumatologista'";
	$dados = $PDO->query($sql_read);
	
	$resultado = array();
	
	while($contato = $dados->fetch(PDO::FETCH_OBJ)){
		$resultado[] = array("id"=>$contato->id, "nome"=>$contato->nome, "telefone"=>$contato->telefone, "email"=>$contato->email,"endereco"=>$contato->endereco, "especialidade"=>$contato->especialidade);
	}
	echo json_encode($resultado);
	
?>