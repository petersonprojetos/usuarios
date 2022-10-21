const importModules = require('import-modules')

/*
$(document).ready(function() {
    $('.link-form').click(function(){
        $(this).next('.form').slideToggle();
    })
})
*/

function btnCancelar() {
    alert('cancelado')
}

function arrayCkb(params) {
    //CAPTAR DADOS SELECIONADOS PELO CHECKBOX E POR EM UM ARRAY
    let visualizarDadosCheckbox=[]
    let v = document.getElementsByName('visDados[]')
    for (var i=0 ; i<v.length ; i++){
        if (v[i].checked) {
            visualizarDadosCheckbox.push(v[i].value)
        }
    }    
    //DADOS CAPTADOS DO CHECKBOX COLOCADOS EM ORDEM ALFABÉTICA NO ARRAY
    const sorted = visualizarDadosCheckbox.sort((a,b)=>{
        return a.localeCompare(b)
    })
    perfis = sorted.toString.join(' , ')
    console.log(perfis)
}

    module.exports={arrayCkb}

    
    //PERFIL - PERFIL DE USUARIO - APLICAR (MARCAR - TODAS)
    var select = document.getElementById('perfil-select')
    var valorSelecionado     
    let checkbox
    let btnCheck    
    select.onchange = function selecionado(){
        valorSelecionado = this.value
    }   
    function aplicar() {
        switch (valorSelecionado) {
    
                //CADASTRO
                case 'cadastro':
                    console.log('cadastro-funcionou')
                    checkbox = document.querySelectorAll('.perfis-cadastro')
                    btnCheck = document.querySelector('#aplicar')
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked       
                    }
                    })
    
    
                break;
        
                
                //AUDITORIA-CONCORRENTE
                case 'auditoria-concorrente':
                    console.log('auditoria-concorrente-funcionou')
                    checkbox = document.querySelectorAll('.auditoria-concorrente')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
    
                break;
    
                //PAGAMENTO
                case 'pagamento':
                    console.log('pagamento-funcionou')
                    checkbox = document.querySelectorAll('.pagamento')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //RELATORIOS BI
                case 'relatorios-bi':
                    console.log('relatorios-bi-funcionou')
                    checkbox = document.querySelectorAll('.relatorios-bi')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //CREDENCIAMENTO
                case 'credenciamento':
                    console.log('credenciamento-funcionou')
                    checkbox = document.querySelectorAll('.credenciamento')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //AIS
                case 'ais':
                    console.log('ais-funcionou')
                    checkbox = document.querySelectorAll('.ais')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //CORE
                case 'core':
                    console.log('core-funcionou')
                    checkbox = document.querySelectorAll('.core')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //RELACIONAMENTO
                case 'relacionamento':
                    console.log('relacionamento-funcionou')
                    checkbox = document.querySelectorAll('.relacionamento')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //RELATORIOS
                case 'relatorios':
                    console.log('relatorios-funcionou')
                    checkbox = document.querySelectorAll('.relatorios')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //COBRANCA
                case 'cobranca':
                    console.log('cobranca-funcionou')
                    checkbox = document.querySelectorAll('.cobranca')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //SETUP
                case 'setup':
                    console.log('setup-funcionou')
                    checkbox = document.querySelectorAll('.setup')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //ANALISE DE CONTAS
                case 'analise-de-contas':
                    console.log('analise-de-contas-funcionou')
                    checkbox = document.querySelectorAll('.analise-de-contas')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //AUTORIZACAO
                case 'autorizacao':
                    console.log('autorizacao-funcionou')
                    checkbox = document.querySelectorAll('.autorizacao-funcionou')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //ATENDIMENTO
                case 'atendimento':
                    console.log('atendimento-funcionou')
                    checkbox = document.querySelectorAll('.atendimento')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //EDITOR DE REGRAS
                case 'editor-de-regras':
                    console.log('editor-de-regras-funcionou')
                    checkbox = document.querySelectorAll('.editor-de-regras')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
    
                //FATURAMENTO
                case 'faturamento':
                    console.log('faturamento-funcionou')
                    checkbox = document.querySelectorAll('.faturamento')
                    btnCheck = document.querySelector('#aplicar')
    
                    btnCheck.addEventListener('click',() => {
                    for (let current of checkbox) {
                        current.checked = !current.checked
                        
                    }
                    })
                break;
                
            default:
                break;
        }
    }