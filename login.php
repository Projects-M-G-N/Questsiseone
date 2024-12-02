<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$con = mysqli_connect('localhost', 'root', '','projetoquestsise');

if ($con) {
    $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: areatrabalho.php");
        exit(); 
    } else {
        echo 'Email ou senha incorretos';
    }

    mysqli_close($con);
} else {
    echo 'Erro na conexão com o banco de dados: ' . mysqli_connect_error();
}
?>
