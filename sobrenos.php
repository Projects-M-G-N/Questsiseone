<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Questsise</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        :root {
            --background-color: #f9f9f9;
            --primary-color: #0078d4;
            --text-color: #333;
            --secondary-text-color: #555;
            --footer-background: #222;
            --footer-text-color: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .header {
            text-align: center;
            padding: 2rem;
            background-color: var(--primary-color);
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1.2rem;
        }

        .about-section {
            padding: 2rem;
            text-align: center;
        }

        .about-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .about-section p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--secondary-text-color);
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
        }

        .feature {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            width: 250px;
            text-align: left;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h3 {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .feature p {
            font-size: 1rem;
            color: var(--secondary-text-color);
        }

        .footer {
            background-color: var(--footer-background);
            color: var(--footer-text-color);
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
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
        <h1>Questsise</h1>
        <p>Facilitando sua produtividade, 24/7.</p>
    </header>
    <main class="about-section">
        <h2>Sobre Nós</h2>
        <p>
            No Questsise, nossa missão é transformar a maneira como você gerencia suas tarefas diárias.
            Com funcionalidades inteligentes, insights detalhados e notificações em tempo real, estamos
            aqui para tornar sua vida mais organizada e eficiente.
        </p>
        <div class="features">
            <div class="feature">
                <h3>Organização de Tarefas</h3>
                <p>Crie e gerencie suas tarefas com facilidade usando nossa interface intuitiva.</p>
            </div>
            <div class="feature">
                <h3>Insights Detalhados</h3>
                <p>Obtenha relatórios e análises para melhorar sua produtividade.</p>
            </div>
            <div class="feature">
                <h3>Notificação em Tempo Real</h3>
                <p>Fique atualizado com lembretes automáticos e alertas personalizados.</p>
            </div>
            <div class="feature">
                <h3>Suporte 24/7</h3>
                <p>Nossa equipe está sempre disponível para ajudar com qualquer dúvida.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Questsise. Todos os direitos reservados.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
