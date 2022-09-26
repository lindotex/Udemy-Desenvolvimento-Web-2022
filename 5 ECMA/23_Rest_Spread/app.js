//OOP || Rest - Spread



// Contexto Spread

    let tituloArtigo = 'Como utilizar o operador rest/spread'


    // console.log(tituloArtigo)
    // console.log(...tituloArtigo)
    // console.log([...tituloArtigo])

    // no contexto de Arrays

    let listaCurso1 = ['NodeJS e MongoDB', 'ES6, Typescrypt e Angular4' ]
    let listaCurso2 = ['Mutiplataforma Android', 'Introdução ao GNU/Linux' ]
    let listaCursoCompleto = ['Web Completo', 'Android completo',...listaCurso1,...listaCurso2 ]

    console.log(listaCursoCompleto)


    // no contexto de objetos

    let pessoa = {nome:'Joao', idade: 27}
    let clone  = {...pessoa ,endereço: 'Rua ABC'}

    console.log(clone)

// Contexto Spread

// Contexto Rest

    function soma(...param){
        let resultado = 0

        console.log(param)

        param.forEach(v => resultado += v)
        return resultado
    }

    console.log(soma(3,8,5,7))

    function multiplicacao(m, ...p){
        console.log(m)
        resultado = 0
        console.log(p)

        p.forEach(v =>resultado +=v)
        return resultado
    }   

    console.log(multiplicacao(7, 5, 12, 3, 49))

// Contexto Rest