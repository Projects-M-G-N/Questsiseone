<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'projetoquestsise');

$nome = $_POST['nome'];
$inicio = $_POST['inicio'];
$final = $_POST['final'];
$descricao = $_POST['descricao'];
$categorias = $_POST['categorias'];
$codigo_status = $_POST['codigo'];

if ($conn) {
    $query = "SELECT codigo FROM status WHERE codigo = '$codigo_status'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $status = mysqli_fetch_assoc($result)['codigo'];
    } else {
        echo "Status não encontrado.";
        exit();
    }

    $nome = mysqli_real_escape_string($conn, $nome);
    $inicio = mysqli_real_escape_string($conn, $inicio);
    $final = mysqli_real_escape_string($conn, $final);
    $descricao = mysqli_real_escape_string($conn, $descricao);
    $categorias = mysqli_real_escape_string($conn, $categorias);

    $insert = "INSERT INTO tarefas VALUES (NULL, '$nome', '$categorias', '$inicio', '$final', '$descricao', '$status');";
    $result = mysqli_query($conn, $insert);

    if ($result) {
        $_SESSION['tarefa_nome'] = $nome;
        $_SESSION['tarefa_status'] = $status;

        echo "Tarefa inserida com sucesso!";
    } else {
        echo "Erro ao inserir a tarefa: " . mysqli_error($conn);
    }
} else {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
}

mysqli_close($conn);
?>

