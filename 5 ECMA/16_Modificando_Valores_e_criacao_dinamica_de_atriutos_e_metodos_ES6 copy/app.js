//Alterando Valores do Objeto

let pessoa = {
    nome: 'Maria',
    idade: 25
}

console.log(pessoa)

// Alterando valor:

pessoa.nome = 'João'
pessoa.idade = 15

console.log(pessoa)

pessoa.nome = 'Plínio'
pessoa.idade = 50


console.log(pessoa)

// Incluindo Atributos e valores ao Objeto

pessoa.sexo = 23 // Somando atributo `Sexo` ao objeto

console.log(pessoa)

pessoa.peso = 71 // Somando atributo `peso` ao objeto

console.log(pessoa)

pessoa.comerComida = () => console.log(`${pessoa.nome} Comeu`) // Somando Metodo `peso` ao objeto


console.log(pessoa)
pessoa.comerComida()