<?php
    include_once('conexao.php');

    $sql = "SELECT * FROM cliente";
    $result = $conexao->query($sql);
?>

<table border="3">

    <tr>
        <td>idCliente</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ender</td>
        <td>Telefone</td>
    </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['idCliente']."</td>";
            echo "<td>".$user_data['Nome']."</td>";
            echo "<td>".$user_data['Email']."</td>";
            echo "<td>".$user_data['Ender']."</td>";
            echo "<td>".$user_data['Telefone']."</td>";
        }
?>