<?php

include("conexao.php");

//$idPedido_idPedido($_POST['Pedido_idPedido']);
$Nome=($_POST['Nome']);
$Quantidade=($_POST['Quantidade']);
$Valor_Unitario=($_POST['Valor_Unitario']);

$sql="INSERT INTO produto (Nome, Quantidade, Valor_Unitario) 
    VALUES('$Nome','$Quantidade','$Valor_Unitario')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>

