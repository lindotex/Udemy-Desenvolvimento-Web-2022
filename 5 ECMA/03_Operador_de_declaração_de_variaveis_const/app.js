// Valores constantes

// Constante Global Sendo definida
const SERIE = 'friends'

function x() {
    //Constante em bloco de função sendo definida:
    const SERIE = 'the walking dead'
    console.log('Dentro da Funcao ' + SERIE)
}

x()

console.log('Escopo Global: ' + SERIE)