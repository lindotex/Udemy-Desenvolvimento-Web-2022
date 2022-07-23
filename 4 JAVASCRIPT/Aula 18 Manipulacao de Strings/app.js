var nome = 'Jorge Sant Ana'

// Propriedade Lenght
// Exibe o tamanho da string
document.write(nome.length + '<br />')

// Metodo CharAr
//Exibe o valor correspondente de caracter da string ao indice passado.
document.write(nome.charAt(7) + '<br />')

// Metodo indexOf
// Retorna o indice do primeiro caracter da string semelhante ao index passado.
document.write(nome.indexOf('g') + '<br />')

// Metodo replace
// Subtitui trecho da string
document.write(nome.replace('Sant Ana', 'Silva') + '<br />')

// Metodo substr
// Subtitui trecho da string
document.write(nome.substr(6,4) + '<br />')

// Metodo toLowerCase
// altera o texp para caixa baixa
document.write(nome.toLowerCase() + '<br />')

// Metodo toUppererCase
// altera o texp para caixa alta
document.write(nome.toUpperCase() + '<br />')

// Metodo trim
// altera o texp para caixa alta
document.write('-' + nome.trim(2) + '-<br />')