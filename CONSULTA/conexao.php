<?php  

$hostname="localhost";
$banco="liloca";
$usuario="root";
$senha=""; 


$conexao = mysqli_connect($hostname, $usuario, $senha, $banco);
if (!$conexao) {
	die("Falha ao conectar: ".$mysqli->connect_error());
}else
	echo "Conectado ao Banco!";


/*
$mysqli = new mysqli($hostname, $usuario, $senha, $banco);
if($mysqli->connect_errno){
	echo"Falha ao Conectar!(".$mysqli->connect_errno." )". $mysqli->connect_errno;
}else
	echo"Conectado ao Banco!";
*/
?>