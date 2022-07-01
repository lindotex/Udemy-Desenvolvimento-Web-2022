//Concatenação : a soma de strings para dinamizar os elementos HTML
// Inserção de nomes dentro de um H1, por exemplo.
// Adicionando as variavis "nome" e "idade" dentro do H1.


// Prompt : Abre um popup (formulário) no Browser.
//O prompt sempre recebe os valores digitados como uma string!

var nome = prompt('Digite o seu nome: ')
var idade = prompt('Digite a sua idade: ')

document.write("<h1>Olá " + nome + ", Tudo bem? Estou vendo que voce possui " + idade + " Anos!</h1>")