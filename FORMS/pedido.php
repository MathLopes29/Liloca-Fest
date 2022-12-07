<?php

include("conexao.php");

date_default_timezone_set('America/Sao_Paulo');
$data_Prazo=date("Y-m-d H:i:s");
$data_Pedido=date("Y-m-d H:i:s");

//$idPedido=$_POST['idPedido'];
$idAniversario=($_POST['Aniversario_idAniversario']);
$data_Prazo=($_POST['Data_Prazo']);
$data_Pedido=($_POST['Data_Pedido']);
$valor_Sinal=($_POST['Valor_Sinal']);
$valor_Total=($_POST['Valor_Total']);
$valor_Frete=($_POST['Valor_Frete']);


$sql="INSERT INTO pedido (Aniversario_idAniversario, Data_Prazo,Data_Pedido, Valor_Sinal, Valor_Total, Valor_Frete) 
    VALUES('$idAniversario', '$data_Prazo','$data_Pedido','$valor_Sinal','$valor_Total','$valor_Frete')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>