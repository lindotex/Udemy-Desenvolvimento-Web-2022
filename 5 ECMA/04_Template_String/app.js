// ECMA 2015 :: Template Strings

// Utiliza-se cráse dupla: >>> ` ` <<<
// O texto pode ser concatenado escrito diretamente, sem precisar do + ...
// para adicionar a variavel no texto, basta utilizar a sintaxe: ${variavel}.

// 1ª : Contatenando
let nome = 'jorge'

console.log('Oi ' + nome + ', tudo bem?') //JS Vanilla, não está correto
console.log(`Oi ${nome}, tudo bem?`) //ECMA Script
// Mesmo resultado, mas, melhor usar o ECMA.

// 2ª : Para calculos matemáticos em meio a Strings
console.log(`7 + 7 = ${7+7}`)

// 3ª : Execução de Funções dentro de strings

function calcular (x,y){
    return x*y
}

console.log(`A multiplicação de 8 * 8 é ${calcular(8,8)}`)