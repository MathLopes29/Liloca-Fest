<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM entrega";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idEntrega</td>
        <td>idPedido</td>
        <td>Data_Entrega</td>
        <td>Ender_Entrega</td>
        <td>Valor_Restante</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idEntrega']."</td>";
            echo "<td>".$user_data['Pedido_idPedido']."</td>";
            echo "<td>".$user_data['Data_Entrega']."</td>";
            echo "<td>".$user_data['Ender_Entrega']."</td>";
            echo "<td>".$user_data['Valor_Restante']."</td>";
        }
?>