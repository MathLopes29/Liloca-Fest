<?php

include("conexao.php");

$idProduto=($_POST['Produto_idProduto']);
$Medida	=($_POST['Medida	']);

$result = mysqli_query($conexao, "INSERT INTO alimento (Produto_idProduto, Medida) 
VALUES('$idProduto','$Medida')");

/*
if(mysqli_query($conexao, $sql)){
    echo "<br>Usuário cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);
*/
?>
