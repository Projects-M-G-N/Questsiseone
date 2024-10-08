<?php
    $conec = mysqli_connect('localhost', 'root', '', 'projetoquestsise');

    $nome = $_POST['nome'];
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $descricao = $_POST['descricao'];
    $cat = $_POST['categoria'];

    if($conec){
    $insert = "INSERT INTO tarefas VALUE(null,'$nome', $inicio, $final,$descricao, $cat);";
    $result = mysqli_query($conec, $insert);

    }

?>