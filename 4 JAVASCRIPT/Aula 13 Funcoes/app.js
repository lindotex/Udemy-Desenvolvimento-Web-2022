// Funcoes
// Sintaxe necessaria com calculo de area como exemplo:
// function calcularAreaTerreno(largura, comprimento){ var area = largura * comprimento; return area}


// Primeira Forma:
/*

largura = prompt('Digite a Largura do terreno:')
comprimento = prompt('Digite o comprimento do terreno:')

function calcularAreaTerreno( largura, comprimento){ 
    var area = largura * comprimento 
    document.write('O terreno Possui ' + area + ' metros quadrados') 
}

calcularAreaTerreno(largura,comprimento)

*/

// Segunda forma:

largura = prompt('Digite a Largura do terreno:')
comprimento = prompt('Digite o comprimento do terreno:')

function calcularAreaTerreno( largura, comprimento){ 
    var area = largura * comprimento 
    return area
}

document.write('O terreno possui ' + calcularAreaTerreno(largura,comprimento)+ ' metros quadrados.')