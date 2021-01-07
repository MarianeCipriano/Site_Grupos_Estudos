<?php

//______________________________________________Dados para conexão
$servidor = "localhost";
$usuario = "root";  //verificar se no seu computador se esse é o nome do usuario do servidor (xamp)
$senha = "";		//verificar se no seu computador se essa é a senha  do servidor (xamp)
$bd = "gpestudos";		//verificar se no seu computador se esse é o nome do banco de dados


//______________________________________________Conexão com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conexao){
	echo "<br>Falha na conexão:". $conexao->connect_errno;
	echo "<br>Mensagem de erro:". $conexao->connect_error;
	echo "<pre>";
	print_r($conexao);
	echo "</pre>";
}else{
	echo "<br>Conectou com o BD!<br>";
}


?>