<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questsise</title>
    <style>
        :root {
    --cor-branca: #ffffff;
    --cor-preta: #333333;
    --cor-azul-escuro: #050783;
    --cor-azul-medio: #0077b6;
    --cor-azul-claro: #007bff;
    --cor-cinza-claro: #f9f9f9;
    --cor-cinza-escuro: #333333;
    --cor-acento: #007bff;
    --cor-hover: #e3e3e3;
}

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    display: flex;
    flex-direction: column;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: var(--cor-branca);
    color: var(--cor-preta);
    flex: 1;
}

a {
    text-decoration: none;
    color: var(--cor-branca);
    transition: color 0.3s;
}

a:hover {
    text-decoration: none;
    scale: 1.1;
}

header {
    background-color: var(--cor-azul-escuro);
    color: var(--cor-branca);
    padding: 10px 20px;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    box-sizing: border-box;
}

header .logo {
    margin: 0;
}

header .logo h1 {
    font-size: 1.5rem;
    font-weight: bold;
}

header nav {
    margin-left: auto;
    display: flex;
    gap: 10px;
}

header nav a {
    font-weight: bold;
    color: var(--cor-branca);
    padding: 5px 10px;
}

header nav a:hover {
    text-decoration: none;
    color: var(--cor-branca);
}

main {
    flex: 1;
    display: flex;
    flex-direction: column;
    margin-top: 80px;
    padding-bottom: 40px;
}

.hero {
    background-color: var(--cor-azul-medio);
    color: var(--cor-branca);
    padding: 100px 5%;
    text-align: center;
}

.hero .meio h1 {
    font-size: 3rem;
    margin: 0;
    font-weight: bold;
}

.hero .meio h3 {
    font-size: 1.5rem;
    margin: 10px 0;
}

section {
    text-align: center;
    background-color: var(--cor-branca);
}

section h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
}

section h3 {
    font-size: 1.25rem;
    margin-top: 10px;
}

.vantagens-conteudo, .funcionalidades-conteudo, .faq-conteudo {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.vantagem, .funcionalidade, .faq-item {
    background-color: var(--cor-cinza-claro);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex: 1 1 calc(33.333% - 40px);
    max-width: calc(33.333% - 40px);
    transition: transform 0.3s, box-shadow 0.3s;
}

.vantagem .icone-vantagem, .funcionalidade .icone-funcionalidade {
    font-size: 3rem;
    color: var(--cor-acento);
    margin-bottom: 15px;
}

.vantagem h3, .funcionalidade h3, .faq-item h3 {
    font-size: 1.5rem;
    margin: 10px 0;
    font-weight: bold;
}

.vantagem p, .funcionalidade p, .faq-item p {
    font-size: 1rem;
    line-height: 1.6;
}

footer {
    width: 100%;
    background-color: var(--cor-cinza-escuro);
    color: var(--cor-branca);
    padding: 20px 5%;
    box-sizing: border-box;
    margin-top: auto;
}

.vantagem {
    cursor: pointer;
}


.rodape-conteudo {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.rodape-secao {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
}

.rodape-secao h4 {
    margin-bottom: 15px;
    font-size: 1.25rem;
    font-weight: bold;
}

.rodape-secao p {
    font-size: 0.9rem;
    line-height: 1.6;
}

.social-links a {
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
    color: var(--cor-branca);
    font-size: 1.5rem;
    transition: color 0.3s, transform 0.3s;
}

.social-links a:hover {
    color: var(--cor-hover);
    transform: scale(1.1);
}

@media (max-width: 768px) {
    header {
        padding: 20px 5%;
    }

    .hero {
        padding: 80px 5%;
    }

    section {
        padding: 40px 5%;
    }

    .rodape-conteudo {
        flex-direction: column;
        align-items: center;
    }

    .rodape-secao {
        text-align: center;
    }
}

@media (max-width: 480px) {
    .hero .meio h1 {
        font-size: 2.5rem;
    }

    .hero .meio h3 {
        font-size: 1.25rem;
    }

    .vantagem, .funcionalidade, .faq-item {
        flex: 1 1 100%;
        max-width: 100%;
    }
}

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Questsise</h1>
        </div>
        <nav>
            <a href="cadastrocliente.php">Cadastro</a>
            <a href="login.html">Entrar</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="meio">
                <h1>Todos os aplicativos em um só lugar</h1>
                <h3>Agilize o seu projeto</h3>
            </div>
        </section>

        <section class="vantagens">
            <h1>Vantagens da nossa ferramenta</h1>
            <div class="vantagens-conteudo">
                <div class="vantagem" onclick="window.location.href='ferramentas.php';">
                    <span class="icone-vantagem">🔧</span>
                    <h3>Fácil de usar</h3>
                    <p>Nossa ferramenta é intuitiva e fácil de usar.</p>
                </div>
                <div class="vantagem" onclick="window.location.href='ferramentas.php';">
                    <span class="icone-vantagem">⚙️</span>
                    <h3>Alta performance</h3>
                    <p>Desempenho de alta qualidade para suas necessidades.</p>
                </div>
                <div class="vantagem" onclick="window.location.href='ferramentas.php';">
                    <span class="icone-vantagem">🔒</span>
                    <h3>Segurança</h3>
                    <p>Proteção total para seus dados.</p>
                </div>
            </div>
        </section>


        <section class="funcionalidades">
            <h1>Funcionalidades Principais</h1>
            <div class="funcionalidades-conteudo">
                <div class="funcionalidade">
                    <span class="icone-funcionalidade">📊</span>
                    <h3>Relatórios detalhados</h3>
                    <p>Obtenha insights detalhados com nossos relatórios.</p>
                </div>
                <div class="funcionalidade">
                    <span class="icone-funcionalidade">🔔</span>
                    <h3>Notificações em tempo real</h3>
                    <p>Receba alertas instantâneos sobre eventos importantes.</p>
                </div>
                <div class="funcionalidade">
                    <span class="icone-funcionalidade">💬</span>
                    <h3>Suporte 24/7</h3>
                    <p>Nossa equipe está disponível para ajudar a qualquer momento.</p>
                </div>
            </div>
        </section>

        <section class="faq">
            <h1>Perguntas Frequentes</h1>
            <div class="faq-conteudo">
                <div class="faq-item">
                    <h3>Como faço para me registrar?</h3>
                    <p>Basta clicar no link "Cadastre-se" e preencher o formulário.</p>
                </div>
                <div class="faq-item">
                    <h3>É seguro usar a plataforma?</h3>
                    <p>Sim, utilizamos as melhores práticas de segurança para proteger seus dados.</p>
                </div>
                <div class="faq-item">
                    <h3>Como entrar em contato com o suporte?</h3>
                    <p>Você pode nos contatar a qualquer momento através da página de contato.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="rodape-conteudo">
            <div class="rodape-secao">
                <a href="sobrenos.php">Sobre Nós</a> <br>
                <a href="contato.php">Contato com o Suporte</a>
            </div>
            
            <div class="rodape-secao">
                <h4>Redes Sociais</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/">Facebook</a>
                    <a href="https://x.com/home">Twitter</a>
                    <a href="https://br.linkedin.com/?">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
