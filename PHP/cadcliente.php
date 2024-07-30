<?php

    $con = mysqli_connect('localhost', 'root', '', 'projetoquestsise');

    $NOME = $_POST ['nome'];
    $EMAIL = $_POST ['email'];
    $SENHA = $_POST ['senha'];
    $DATA_DE_NASCIMENTO = $_POST ['nascimento'];

    if($con){
        $insert = "INSERT INTO usuario VALUE(NULL,'$NOME', '$EMAIL', $SENHA, $DATA_DE_NASCIMENTO);";
        $result = mysqli_query($con, $insert);

        if($result){
            echo "<a href = 'areatrabalho.html'> area de trabalho ";


        }
        else{
            echo "gerou algum erro";
        }
    }
    else{
        echo "algum erro";
    }




?>
