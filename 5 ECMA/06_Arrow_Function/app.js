// ECMA 2015 :: Template Strings

// Funcao sem arrow -----------------------------------------
let quadrado = function(x = 5) {
    return x * x
}

document.write(`Sem Arrow: ${quadrado(3)}`)
document.write('<br/>')

//Arrow Function -------------------------------------------

let quadrado2 = (x) => {
    return x*x
}

document.write(`Com Arrow: ${quadrado2(4)}`)
document.write('<br/>')

//Arrow Function melhorando : ------------------------------

let quadrado3 = x => x*x //Return implicito

document.write(`Com Arrow Melhorado: ${quadrado3(5)}`)
document.write('<br/>')
document.write('<br/>')
document.write('<br/>')

//-----------------------------------------------------------//
// Outro Exemplo --------------------------------------------//

// Saber se o numero é par:
let parOuImpar = function(numero) {
    if(numero % 2 === 0 ){
        return `O Numero ${numero} é Par`
    }else {
        return `O Numero ${numero} é Impar`
    }
}
document.write('<strong>Resultado com If Else:</strong>')
document.write('<br/>')
document.write(parOuImpar(4))
document.write('<br/>')
document.write('<br/>')

//Ajustando o código

let parOuImpar2 = numero2 => numero2 % 2 === 0 ? `O Numero ${numero2} é Par` : `O Numero ${numero2} é Impar`
document.write('<strong>Resultado com Bloco ternário simples:</strong>')
document.write('<br/>')
document.write(parOuImpar2(155))
document.write('<br/>')