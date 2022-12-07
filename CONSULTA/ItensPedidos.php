<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM itens";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idProduto</td>
        <td>idPedido</td>
        <td>Quantidade</td>
        <td>Valor_Total</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['Produto_idProduto']."</td>";
            echo "<td>".$user_data['Pedido_idPedido']."</td>";
            echo "<td>".$user_data['Quantidade']."</td>";
            echo "<td>".$user_data['Valor_Total']."</td>";
        }
?>