<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'projetoquestsise');

$nome = $_POST['nome'];
$inicio = $_POST['inicio'];
$final = $_POST['fim'];
$descricao = $_POST['descricao'];
// $categorias = $_POST['categorias'];
// $codigo_status = $_POST['codigo'];

if ($conn) {

    $nome = mysqli_real_escape_string($conn, $nome);
    $inicio = mysqli_real_escape_string($conn, $inicio);
    $final = mysqli_real_escape_string($conn, $final);
    $descricao = mysqli_real_escape_string($conn, $descricao);

    $insert = "INSERT INTO tarefas VALUES (NULL, '$nome', 'Tarefa', '$inicio', '$final', '$descricao');";
    $result = mysqli_query($conn, $insert);

    if ($result) {
        $_SESSION['tarefa_nome'] = $nome;

        echo "Tarefa inserida com sucesso!";
    } else {
        echo "Erro ao inserir a tarefa: " . mysqli_error($conn);
    }
} else {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
}

mysqli_close($conn);
?>

