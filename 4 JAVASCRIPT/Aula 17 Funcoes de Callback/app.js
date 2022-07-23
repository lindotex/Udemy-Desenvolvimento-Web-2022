function exibirArtigo (id, callbackSucesso, callbackErro){

    //Recuperar ID via requisicao http

    if(true){
        callbackSucesso('Funcoes de Callback em JS', 'Funcoes de callback sao muito utilizadas...')
    } else {
        callbackErro('Erro ao Recuperar os dados')
    }
}

var callbackSucesso = function(titulo, descricao){
    document.write('<h1>' + titulo + '</h1>')
    document.write('<hr />')
    document.write('<h1>' + descricao + '</h1>')
}
var callbackErro = function(erro){
    document.write('<h1>' + erro + '</h1>')
}

exibirArtigo(1, callbackSucesso, callbackErro)