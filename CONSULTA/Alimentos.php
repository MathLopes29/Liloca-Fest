<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM alimento";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idAlimento</td>
        <td>idProduto</td>
        <td>Medida</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idAlimento']."</td>";
            echo "<td>".$user_data['Produto_idProduto']."</td>";
            echo "<td>".$user_data['Medida']."</td>";
        }
?>