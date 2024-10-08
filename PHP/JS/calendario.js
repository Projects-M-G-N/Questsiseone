const agora = new Date();
const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
const anoAtual = agora.getFullYear();
const mesAtual = agora.getMonth();

let mes = mesAtual;
let ano = anoAtual;

function diasDoMes() {
    let diasNum = document.querySelector(".dias-numero");
    diasNum.innerHTML = "";
    let diaSemana = new Date(ano, mes, 1).getDay();
    let quantDia = new Date(ano, (mes + 1), 0).getDate();
    let cont = 0;
    let dia = 1;
    for (let index = 0; index <= 42; index++) {
        if(cont != diaSemana || dia > quantDia) {
            diasNum.innerHTML += `<div class="dia"></div>`;
            cont++;
        } else {
            diasNum.innerHTML += `<div class="dia dia-num" onclick="chamarStatus(${dia}, ${mes}, ${ano})"><div class="dia-caixa">${dia}</div></div>`;
            dia++;
        }
    }
}

function setMesAno() {
    let mesAno = document.querySelector('.mes-ano h2');
    mesAno.innerHTML = `${meses[mes]} ${ano}`;
    diasDoMes();
}

setMesAno();

function voltarMes() {
    if((mes - 1) < 0) {
        mes = 11;
        ano--;
    } else {
        mes--;
    }
    setMesAno();
}

function avancarMes() {
    if((mes + 1) > 11) {
        mes = 0;
        ano++;
    } else {
        mes++;
    }
    setMesAno();
}
function abrirFormulario(dia, mes, ano) {
    document.getElementById('taskForm').style.display = 'block';
    document.getElementById('taskDate').value = `${ano}-${mes + 1}-${dia}`;
}

function closeForm() {
    document.getElementById('taskForm').style.display = 'none';
}

function submitForm(event) {
    event.preventDefault();
    const form = document.getElementById('taskFormElement');
    const formData = new FormData(form);

    fetch('./php/cadtarefa.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        alert(data);
        closeForm();
        fecharCardCalendario();
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

    function chamarStatus(dia, mes, ano) {

        let janelaCard = document.querySelector('.janela-card');
        janelaCard.classList.add('abrir');
        abrirFormulario(dia, mes, ano);
    
        janelaCard.addEventListener('click', (e) => {
            if(e.target.id == 'janela-card') {
                janelaCard.classList.remove('abrir');
            }
        });
    }
    
    function fecharCardCalendario() {
        let janelaCard = document.querySelector('.janela-card');
        janelaCard.classList.remove('abrir');
    }