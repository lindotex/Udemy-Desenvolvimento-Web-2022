// Dados inseridos diretamente do DOM, sao por padrao, recebidos como strings.
// Para que o console interprete como numeros inteiros ou flutuantes, podemos
// alterar o tipo utilizando a funcao "parseInt" e "parseFloat".

var variavel1 = prompt('Digite um numero');
var variavel2 = prompt('Digite outro um numero');

variavel1 = parseFloat(variavel1);
variavel2 = parseFloat(variavel2);

document.write(variavel1 + variavel2);

