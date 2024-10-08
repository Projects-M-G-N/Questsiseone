<?php
   
    $conn = new mysqli('localhost', 'root', 'usbw', 'projetoquestsise');
    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $sql = "SELECT codigo, nome, data_inicio, data_final, descricao FROM tarefas";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tarefas</title>
    <link rel="stylesheet" href="CSS/tarefas.css">
</head>
<body>
    <a href="areatrabalho.html" class="icon-link"><ion-icon name="arrow-back-outline"></ion-icon></a>
    <h1>Visualizar Tarefas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["codigo"] . "</td>
                                <td>" . $row["nome"] . "</td>
                                <td>" . $row["data_inicio"] . "</td>
                                <td>" . $row["data_final"] . "</td>
                                <td>" . $row["descricao"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhuma tarefa encontrada</td></tr>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
