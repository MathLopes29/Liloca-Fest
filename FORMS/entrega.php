<?php
include("conexao.php");

date_default_timezone_set('America/Sao_Paulo');
$data_Entrega=date("Y-m-d H:i:s");

//$idEntrega=($_POST['idEntrega']);
$pedido_idPedido=($_POST['Pedido_idPedido']);
$data_Entrega=($_POST['Data_Entrega']);
$ender_Entrega=($_POST['Ender_Entrega']);
$valor_Restante=($_POST['Valor_Restante']);


$sql="INSERT INTO entrega (Pedido_idPedido, Data_Entrega, Ender_Entrega, Valor_Restante) 
    VALUES('$pedido_idPedido','$data_Entrega','$ender_Entrega','$valor_Restante')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);
?>