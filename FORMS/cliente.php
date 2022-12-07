<?php

include("conexao.php");

//$idCliente=($_POST['idCliente']);
$Nome=($_POST['Nome']);
$Email=($_POST['Email']);
$Ender=($_POST['Ender']);
$Telefone=($_POST['Telefone']);

$sql="INSERT INTO cliente (Nome, Email, Ender, Telefone) 
    VALUES('$Nome','$Email','$Ender', '$Telefone')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cliente cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>




