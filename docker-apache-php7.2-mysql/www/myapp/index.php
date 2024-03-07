<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pessoas</title>
</head>
<body>
    <h1>Vizualizando informações dos usuários</h1>
    <table border="1">
        <thead class="">
            <tr>
                <th> ID</th>
                <th>Nome</th>
                
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM usuario";
            $retorno = $mysqli->query($sql) or die("Erro na consulta!".$mysqli->error);

            if($retorno->num_rows > 0){
                while($usuario = $retorno->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$usuario["id"]."</td>";
                    echo "<td>".$usuario["nome"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr> Vazio </tr>";
            }

            $mysqli->close();
            ?>
            <br>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>