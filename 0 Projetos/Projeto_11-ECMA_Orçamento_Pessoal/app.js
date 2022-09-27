class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }

    validarDados(){
        for(let i in this) {
            if(this[i] == undefined || this[i] == '' || this[i] == null){
                return false
            }
        }
        return true
    }
}

class Bd {
    constructor() {
        let id = localStorage.getItem('id')

        if( id === null){
            localStorage.setItem('id',0)
        }
        
    }
    getProximoId(){
        let proximoId = localStorage.getItem('id')
        return parseInt(proximoId) +1
    }
    gravar(d) {
        let id = this.getProximoId()
       
        localStorage.setItem(id,JSON.stringify(d))   
        localStorage.setItem('id',id)
    }
    recuperarTodosRegistros(){
        //array de despesas
        let despesas = Array()


        let id = localStorage.getItem('id')

        //recuperar todas as despesas cadastradas em local storage
        for (let i = 1 ; i <= id; i++){
            //recuperar a dispesa
           let despesa = JSON.parse(localStorage.getItem(i))

           //Verificar itens deletados 'null'
           if(despesa === null){
            continue
           }
           despesa.id = i
           despesas.push(despesa)        
        }

        return despesas
    }

    pesquisar(despesa){
        let despesasFiltradas = Array()

        despesasFiltradas = this.recuperarTodosRegistros()
      
        //Filtro de Ano
        if (despesa.ano != ''){
            console.log('filtro de ano')
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
        }
        //Filtro de Mes
        if (despesa.mes != ''){
            console.log('filtro de mes')
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
        }        
        //Filtro de Dia
        if (despesa.dia != ''){
            console.log('filtro de dia')
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
        }
        //Filtro de Tipo
        if (despesa.tipo != ''){
            console.log('filtro de tipo')
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
        }
        //Filtro de Descrição
        if (despesa.descricao != ''){
            console.log('filtro de descricao')
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
        }
        //Filtro de Valor
        if (despesa.valor != ''){
            console.log('filtro de valor')
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
        }

        return despesasFiltradas
    }

    remover(id){
        localStorage.removeItem(id)
    }
}

let bd = new Bd()


//........ BTN CADASTRAR ..................................................................
function cadastrarDespesa(){
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor =  document.getElementById('valor')

    let despesa = new Despesa(
        ano.value, 
        mes.value, 
        dia.value, 
        tipo.value, 
        descricao.value, 
        valor.value
    )

    if(despesa.validarDados()){
        bd.gravar(despesa)
        document.getElementById('modal_titulo').innerHTML = 'Registro inserido com Sucesso!'
        document.getElementById('modal_titulo_div').className = 'modal-header text-success'
        document.getElementById('modal_texto').innerHTML = '<strong>Sucesso!</strong><br> Registro inserido com Sucesso!'
        document.getElementById('modal_botao').innerHTML = 'Fechar'
        document.getElementById('modal_botao').className = 'btn btn-success'
        
        $('#modalRegistraDespesa').modal('show')
        
        ano = ''
        mes = ''
        dia = ''
        tipo = ''
        valor = ''
    }else{
        //erro
        document.getElementById('modal_titulo').innerHTML = 'Erro na Inclusão do Registro!'
        document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
        document.getElementById('modal_texto').innerHTML = '<strong>ERRO!</strong><br> Verifique se todos os dados foram preenchidos!'
        document.getElementById('modal_botao').innerHTML = 'Voltar'
        document.getElementById('modal_botao').className = 'btn btn-danger'
        $('#modalRegistraDespesa').modal('show')
    }
}


function carregaListaDespesas(despesas = Array(), filtro = false){
    
    if(despesas.length == 0 && filtro == false){
        despesas = bd.recuperarTodosRegistros()
    }

    // despesas = bd.recuperarTodosRegistros()    
    
    let listaDespesas = document.getElementById(`listaDespesas`)
    listaDespesas.innerHTML = ''
    //percorrer o array despesas dinam  icamente

    despesas.forEach( function(d){
       
        // criando a linha
        let linha = listaDespesas.insertRow()
        
        // inserir os valores - colunas

        // Ajustando os Meses
        switch(d.mes){
            case '1': d.mes = 'Jan'
            break
            case '2': d.mes = 'Fev'
            break
            case '3': d.mes = 'Mar'
            break       
            case '4': d.mes = 'Abr'
            break   
            case '5': d.mes = 'Mai'
            break
            case '6': d.mes = 'Jun'
            break  
            case '7': d.mes = 'Jul'
            break  
            case '8': d.mes = 'Ago'
            break  
            case '9': d.mes = 'Set'
            break  
            case '10': d.mes = 'Out'
            break  
            case '11': d.mes = 'Nov'
            break  
            case '12': d.mes = 'Dec'
            break             
        }

        //Ajustando os tipo
        
        switch(d.tipo){
            case '1': d.tipo = 'Alimentação'
            break
            case '2': d.tipo = 'Educação'
            break
            case '3': d.tipo = 'Lazer'
            break       
            case '4': d.tipo = 'Saúde'
            break   
            case '5': d.tipo = 'Transporte'
            break           
        }

        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`        
        linha.insertCell(1).innerHTML = d.tipo
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = `R$ ${d.valor}`
        
        // btn exclusao
        
        let btn = document.createElement('button')
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"></i>'
        btn.id = `id_despesa_${d.id}` 
        
        btn.onclick = function () {
            let id = this.id.replace('id_despesa_','')            
            //remover o 'this
            bd.remover(id)
            window.location.reload()
        }
        // console.log(d)
        linha.insertCell(4).append(btn) 
    })
}

function pesquisarDespesas(){

    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    let despesas = bd.pesquisar(despesa)
    
    carregaListaDespesas(despesas, true)
   
}


function reloadPage(){
    window.location.reload()
}