<?php

include("conexao.php");

$Produto_idProduto=($_POST['Produto_idProduto']);
$Pedido_idPedido=($_POST['Pedido_idPedido']);
$Quantidade=($_POST['Quantidade']);
$Valor_Total=($_POST['Valor_Total']);

$sql="INSERT INTO itens (Produto_idProduto, Pedido_idPedido, Quantidade, Valor_Total) 
    VALUES('$Produto_idProduto','$Pedido_idPedido','$Quantidade', '$Valor_Total')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>