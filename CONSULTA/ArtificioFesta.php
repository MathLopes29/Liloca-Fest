<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM artificios_festa";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idArtificios_Festa</td>
        <td>idProduto</td>
        <td>Cor</td>
        <td>Tema</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idArtificios_Festa']."</td>";
            echo "<td>".$user_data['Produto_idProduto']."</td>";
            echo "<td>".$user_data['Cor']."</td>";
            echo "<td>".$user_data['Tema']."</td>";
        }
?>