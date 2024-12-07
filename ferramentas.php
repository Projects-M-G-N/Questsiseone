<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Como Usar o Questsise</title>
  <style>
    :root {
        --color-primary: #007BFF;
        --color-dark: #333333;
        --color-light: #FFFFFF;
        --font-family: 'Poppins', sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: var(--font-family);
        background-color: var(--color-light);
        color: var(--color-dark);
        line-height: 1.6;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .header {
        background-color: var(--color-primary);
        color: var(--color-light);
        text-align: center;
        padding: 1rem 0;
    }

    .main-content {
        flex: 1;
        padding: 2rem;
        max-width: 900px;
        margin: 0 auto;
    }

    .instructions h2 {
        color: var(--color-primary);
        margin-bottom: 1rem;
    }

    .instructions ol {
        list-style-type: decimal;
        margin-left: 1.5rem;
    }

    .instructions li {
        margin-bottom: 1.5rem;
    }

    .footer {
        text-align: center;
        padding: 1rem;
        background-color: var(--color-dark);
        color: var(--color-light);
    }

    .icon-link {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 2rem;
            color: #00095a;
            text-decoration: none;
        }

        .icon-link:hover {
            color: #0056b3;
        }
  </style>
</head>
<body>
  <header class="header">
    <a href="index.php" class="icon-link"><ion-icon name="arrow-back-outline"></ion-icon></a>
    <h1>Como Usar o Questsise</h1>
  </header>
  <main class="main-content">
    <section class="instructions">
      <h2>Passo a Passo</h2>
      <ol>
        <li>
          <h3>Calendário de Tarefas</h3>
          <p>
            No calendário, clique em um dia para criar uma tarefa. Um modal será exibido para que você informe o nome da tarefa, o horário de início e o horário de término. 
            Após salvar, a tarefa será destacada no calendário.
          </p>
        </li>
        <li>
          <h3>Aba Tarefas</h3>
          <p>
            Todas as suas tarefas aparecem organizadas na aba "Tarefas" dentro da área de trabalho. 
            Aqui, você pode visualizar, editar ou excluir qualquer tarefa registrada.
          </p>
        </li>
        <li>
          <h3>Contato com o Suporte</h3>
          <p>
            Para enviar uma mensagem ao suporte, acesse a aba "Suporte". Preencha o formulário com seu nome, e-mail e mensagem e clique no botão "Enviar".
            Nossa equipe responderá o mais rápido possível.
          </p>
        </li>
      </ol>
    </section>
  </main>
  <footer class="footer">
    <p>© 2024 Questsise. Todos os direitos reservados.</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
