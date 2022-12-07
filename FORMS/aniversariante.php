<?php

include("conexao.php");

$idCliente=($_POST['Cliente_idCliente']);
$Nome=($_POST['Nome']);
$Idade=($_POST['Idade']);
$Tema=($_POST['Tema']);
$Cor=($_POST['Cor']);

$sql="INSERT INTO aniversario ( Cliente_idCliente, Nome, Idade, Tema, Cor) 
VALUES('$idCliente','$Nome','$Idade','$Tema', '$Cor')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Aniversariante cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>