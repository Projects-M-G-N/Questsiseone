<?php
$conn = new mysqli('localhost', 'root', 'usbw', 'projetoquestsise');

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$descricao = $_POST['reclamacao'];

if ($conn) {
    $query = "SELECT codigo FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    $cod_usu = mysqli_fetch_all($result)[0][0];
}
$insert = "INSERT INTO formulario VALUES (NULL, '$nome', '$descricao', '$cod_usu');";

$result = mysqli_query($conn, $insert);

if ($result) {
    header("Location: contato.html");
    exit();
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>
