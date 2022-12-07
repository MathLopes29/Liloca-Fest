<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM bebida";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idBebida</td>
        <td>idProduto</td>
        <td>Volume</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idBebida']."</td>";
            echo "<td>".$user_data['Produto_idProduto']."</td>";
            echo "<td>".$user_data['Volume']."</td>";
        }
?>