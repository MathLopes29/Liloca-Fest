<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM produto";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idProduto</td>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Valor_Unitario</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idProduto']."</td>";
            echo "<td>".$user_data['Nome']."</td>";
            echo "<td>".$user_data['Quantidade']."</td>";
            echo "<td>".$user_data['Valor_Unitario']."</td>";
        }
?>