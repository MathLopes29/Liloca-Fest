<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM pedido";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idPedido</td>
        <td>idAniversario</td>
        <td>Data_Prazo</td>
        <td>Data_Pedido</td>
        <td>Valor_Sinal</td>
        <td>Valor_Total</td>
        <td>Valor_Frete</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idPedido']."</td>";
            echo "<td>".$user_data['Aniversario_idAniversario']."</td>";
            echo "<td>".$user_data['Data_Prazo']."</td>";
            echo "<td>".$user_data['Data_Pedido']."</td>";
            echo "<td>".$user_data['Valor_Sinal']."</td>";
            echo "<td>".$user_data['Valor_Total']."</td>";
            echo "<td>".$user_data['Valor_Frete']."</td>";
        }
?>