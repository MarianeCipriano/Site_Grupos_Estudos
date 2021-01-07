<?php

include("conexao.php");

$nome = $_POST["nome"];
$registro = $_POST["registro"];
$email = $_POST["email"];
$senha = $_POST["senha"];

inserir($conexao, "cd", 2.75, "", 13);

inserir ($conexao, $nome, $registro, $email, $senha);

function inserir ($conexao, $nome, $registro, $email, $senha){
    $script = 'INSERT INTO usuario VALUES (DEFAULT,"'. $nome.'",'.$registro.',"'.$email.'",'.$senha.')';
	$insercao = $conexao->query($script);

	echo "<br>Script executado: ". $script;
	if(!$insercao){
		echo "<br>Script executado: ". $script;
		echo "<br>Falha na conexão:". $insercao->connect_errno;
		echo "<br>Mensagem de erro:". $insercao->connect_error;
		echo "<pre>";
			print_r($conexao);
		echo "</pre>";
	}else{
		echo "<br>Inserção realizada com sucesso!";
	}
}

?>