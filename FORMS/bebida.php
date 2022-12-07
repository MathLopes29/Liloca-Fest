<?php

include("conexao.php");

$idProduto=($_POST['Produto_idProduto']);
$Volume=($_POST['Volume']);


$sql="INSERT INTO bebida (Produto_idProduto, Volume) 
VALUES('$idProduto','$Volume')";


if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);

?>
