<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="CSS/calendario.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
<body>
    <a href="areatrabalho.php" class="icon-link"><ion-icon name="arrow-back-outline"></ion-icon></a>
    <div class="calendario">
        
        <div class="mes-ano">
            <button onclick="voltarMes()"><i class="bi bi-caret-left-fill"></i></button>
            <h2></h2>
            <button onclick="avancarMes()"><i class="bi bi-caret-right-fill"></i></button>
        </div>
        <div class="dias-semana">
            <h3>Domingo</h3>
            <h3>Segunda</h3>
            <h3>Terça</h3>
            <h3>Quarta</h3>
            <h3>Quinta</h3>
            <h3>Sexta</h3>
            <h3>Sábado</h3>
        </div>
        <div class="dias-numero">
            
        </div>
    </div>
    <div id="taskForm" class="task-form">
        <form action="form.php" id="taskFormElement" onsubmit="submitForm(event)">
            <h2>Tarefa</h2>
            <label for="taskName">Nome da Tarefa:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="startTime">Início:</label>
            <input type="datetime-local" id="inicio" name="inicio" required>
            
            <label for="endTime">Fim:</label>
            <input type="datetime-local" id="fim" name="fim" required>
            
            <label for="descrição">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>
            
            <input type="hidden" id="taskDate" name="taskDate">
            
            <button type="submit">Salvar</button>
            <button type="button" onclick="closeForm()">Cancelar</button>
        </form>
    </div>
    <div class="janela-card" id="janela-card">
        <div class="card-calendario" id="card-calendario">
            <div class="close">
                <button onclick="fecharCardCalendario()" class="sair"><i class="bi bi-x-circle"></i></button>
            </div>

        </div>
    </div>
    <script src="PHP/JS/calendario.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
