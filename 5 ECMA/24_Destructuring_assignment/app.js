//OOP || Destructuring Assignment

// let frutas  = ['Abacaxi', 'Uva', 'Pera', 'Mamao', , , , , ]

// let a = frutas[0]
// let b = frutas[1]
// let c = frutas[2]

// console.log(a,b, c)
//  ///////////////////////

//  // Destructuring no Array:

//  let [d, e, , f] = frutas  // [] = Desconstructuring quando a esquerda da atribuição
//  // 'd' = indice 0 do array 
//  // 'e' = indice 1 do array
//  // ' ' = indice 2 do array
//  // 'f' = indice 3 do array

//  console.log(d, e, f)


// // Destructuring no Array com valores padrões:

// let [g = 'Pesego', h = 'Banana'] = frutas

// console.log(frutas)
// console.log(a,b,c,d,e,f,g, h)


// // ARRAYS
// Token para arrays = []
// let coisas = [['Abacaxi', 'Uva', 'Pera', 'Mamao'], ['Jose', 'Maria']]
// let [,[,n2]] = coisas
// let [[ , ,n3],] = coisas

// console.log(n2)
// console.log(n3)

//-----------------------------------------------------------------------------
// Objetos
//-----------------------------------------------------------------------------
// token para objetos = {}
// let produto = {
//     descricao: 'Notebook',
//     preco: 1800,
//     detalhes: {  // Composição  "é um" ou  "tem um" de Objeto em outro Objeto
//         fabricante: 'abc',
//         modelo: 'xyz'
//     }
// }

// // let { descricao, preco} = produto
// // console.log(descricao, preco)
// // ou

// let { descricao : d, preco: p  } = produto
// console.log(d, p)

// // let { descricao, preco, desconto  } = produto
// // console.log(descricao, preco, desconto )

// let { descricao, preco, desconto=5, detalhes: {fabricante, modelo} } = produto
// console.log(descricao, preco, desconto, fabricante, model)


// Funções

// let arr = [10, 20, 30, 40]

// function teste([a, b,, c,d =100]){
//     console.log(a,b,c,d)
// }

// teste(arr)

// OBJ literal

// let obj ={
//     a:10,
//     b:20,
//     c:30,
//     d:40
// }

// function teste({a,b}) {
//     console.log(a,b)    
// }



// teste(obj)

// let arr = [10,20,30,40]

// let [a, ...resto] = arr

// console.log(a)
// console.log(resto)

//Destructuring de Objetos

let obj = {
    a: 10, b:20, c:30, d:40,
}

let {a, ...x} = obj //Operador Rest... Juntando 3 atributos em 1 só.
console.log(a)
console.log(x)
