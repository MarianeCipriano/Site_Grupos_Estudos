<?php

	include("conexao.php"); 


//______________________________________________CONSULTA (SELECT)

$id = $_GET["id"];

$script = 'SELECT * FROM grupo WHERE id='.$id;
$consulta = $conexao->query($script);

	// echo "<pre>";
	// 	print_r($script);
	// echo "</pre>";

if(!$consulta){
	echo "<br>Falha na conexão:". $consulta->connect_errno;
	echo "<br>Mensagem de erro:". $consulta->connect_error;
	echo "<pre>";
		print_r($conexao);
	echo "</pre>";
}else{
	//echo "<br>Busca realizada com sucesso!";
}


//header(Location....);

//______________________________________________Exemplo UPDATE
//$script = 'UPDATE produto SET quantidade = 41 WHERE codigo = 1';
//$update = $conexao->query($script);
//validar se ocorreu algum erro

//______________________________________________Exemplo DELETE
//$script = 'DELETE FROM produto WHERE codigo = 3';
//$update = $conexao->query($script);
//validar se ocorreu algum erro

?>