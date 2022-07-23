function soma( a, b){ 
    a = a === undefined ? 0 : a //Este Operador ternario serve para atribuir o valor 0, caso nao haja adicao da variavel a, 
    b = b === undefined ? 0 : b //Este Operador ternario serve para atribuir o valor 0, caso nao haja adicao da variavel b, 
    return a + b
}

console.log(soma(7,7))
