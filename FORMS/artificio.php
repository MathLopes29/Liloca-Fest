<?php

include("conexao.php");

$idProduto=($_POST['Produto_idProduto']);
$Tema=($_POST['Tema']);
$Cor=($_POST['Cor']);

$result = mysqli_query($conexao, "INSERT INTO artificios_festa (Produto_idProduto, Tema, Cor) 
VALUES('$idProduto','$Tema', '$Cor')");

/*
if(mysqli_query($conexao, $sql)){
    echo "<br>Usuário cadastrado com sucesso!";
} else {
    echo "<br> Erro".mysqli_connect_error($conexao).".... Dado possivelmente já inserido!";
}

mysqli_close($conexao);
*/
?>
