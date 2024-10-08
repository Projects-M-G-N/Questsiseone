<?php
    $conn = new mysqli('localhost', 'root', '', 'projetoquestsise');

    $nome = $_POST['nome'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $descricao = $_POST['descricao'];

    if($conn){
        $insert = "INSERT INTO tarefas VALUE(NULL,'$nome', '$inicio', '$fim', '$descricao');";
        $result = mysqli_query($conn, $insert);

        if($result){
            header("Location: calendario.html");
            exit(); 
        }
        else{
            echo "gerou algum erro";
        }
    }
    else{
        echo "algum erro";
    }




