<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link rel="stylesheet" href="CSS/login.css">

</head>
<body>
    <div class="container">
        <div class="form">
            <form action="reclamacoes.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <a href="areatrabalho.php" class="icon-link"><ion-icon name="arrow-back-outline"></ion-icon></a>
                        <h1>Suporte</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="digite seu nome">
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box"> 
                        <label for="reclamação">Reclamação</label>
                        <input type="text" name="reclamacao" id="reclamacao" placeholder="digite sua reclamação" required>  
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
            </html>
