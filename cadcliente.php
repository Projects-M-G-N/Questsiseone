<?php
session_start();

if (isset($_COOKIE['apresentacao'])) {
    echo $_COOKIE['apresentacao'];
} else {
    echo "Cookie 'apresentacao' não encontrado.";
}

$con = mysqli_connect('localhost', 'root', '', 'projetoquestsise');

$NOME = $_POST['nome'];
$EMAIL = $_POST['email'];
$SENHA = $_POST['senha'];
$DATA_DE_NASCIMENTO = $_POST['nascimento'];

if ($con) {
    $NOME = mysqli_real_escape_string($con, $NOME);
    $EMAIL = mysqli_real_escape_string($con, $EMAIL);
    $SENHA = mysqli_real_escape_string($con, $SENHA);
    $DATA_DE_NASCIMENTO = mysqli_real_escape_string($con, $DATA_DE_NASCIMENTO);

    $insert = "INSERT INTO usuario VALUES (NULL, '$NOME', '$EMAIL', '$SENHA', '$DATA_DE_NASCIMENTO');";
    $result = mysqli_query($con, $insert);

    if ($result) {
        $_SESSION['nome'] = $NOME;
        $_SESSION['email'] = $EMAIL;

        echo "<a href='areatrabalho.php'>Área de trabalho</a>";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($con);
    }
} else {
    echo "Erro na conexão com o banco de dados.";
}

mysqli_close($con);
?>
