<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <title>cadastro de tarefas</title>
</head>
<body>
    <a href="index.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
    <div class="container">
        <div class="form">
            <form action="PHP/cadtarefa.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-botao">
                        <button><a href="index.php">inicio</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">nome</label>
                        <input type="text" name="nome" id="nome" placeholder="digite seu nome">
                    </div>
                    <div class="input-box">
                        <label for="inicio">Data de inicio</label>
                        <input type="date" name="inicio" id="inicio">
                    </div>
                    <div class="input-box">
                        <label for="final">Data de Conclusão</label>
                        <input type="date" name="final" id="final">
                    </div>
                    <div class="input-box">
                        <label for="descricao">Digite a descrição</label>
                        <input type="text" name="descricao" id="descricao" placeholder="digite a descrição">
                    </div>
                    <div class="input-box">
                         <label for="categoria">Digite o codigo da categoria</label>
                         <input type="text" name="categoria" id="categoria">
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit">Enviar</button>       
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
    
</body>
</html>