<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <title>Formulário</title>
</head>

<body>
    
    <div class="container">
        <div class="form">
            <form action="cadcliente.php" method="post">
                <div class="form-header">
                    <div class="title-container">
                        <a href="index.php" class="icon-link"><ion-icon name="arrow-back-outline"></ion-icon></a>
                        <h1>Cadastro</h1>
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
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmesenha">Confirme sua Senha</label>
                        <input id="confirmesenha" type="password" name="confirmesenha" placeholder="Digite sua senha novamente" required>
                    </div>
                    <div class="input-box">
                        <label for="">Digite sua data de nascimento</label>
                        <input type="date" name="nascimento" id="nascimento">
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Enviar</button>       
                </div>
            </form>
        </div>
    </div>
    <p id="mensagem"></p>

    <script>
        document.getElementById('cadastroForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('cadcliente.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('mensagem').textContent = 'Usuário cadastrado com sucesso!';
                    document.getElementById('mensagem').style.color = 'green';
                } else {
                    document.getElementById('mensagem').textContent = 'Erro: ' + data.message;
                    document.getElementById('mensagem').style.color = 'red';
                }
            })
            .catch(error => {
                document.getElementById('mensagem').textContent = 'Erro ao processar a solicitação.';
                document.getElementById('mensagem').style.color = 'red';
            });
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>