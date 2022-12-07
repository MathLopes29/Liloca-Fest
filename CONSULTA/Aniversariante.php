<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM aniversario";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idAniversario</td>
        <td>idCliente</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Tema</td>
        <td>Cor</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idAniversario']."</td>";
            echo "<td>".$user_data['Cliente_idCliente']."</td>";
            echo "<td>".$user_data['Nome']."</td>";
            echo "<td>".$user_data['Idade']."</td>";
            echo "<td>".$user_data['Tema']."</td>";
            echo "<td>".$user_data['Cor']."</td>";
        }
?>