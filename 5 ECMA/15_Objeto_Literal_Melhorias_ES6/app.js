// ECMA 2015 :: OO - Objeto Literal Melhorias ES6
//


// Versão ES5 ::::::::::::::::::::::

    let nome = 'Jorge' //document.getElementById('nome').value
    let idade  = 28
    let sexo = 'Masculino'
    let profissao = 'Programador'


    let objeto = {
        nome: nome,
        idade: idade,
        sexo: sexo,
        profissao: profissao,

        exibirResumo: function(){
            console.log(`${this.nome}, ${this.idade} anos, ${this.sexo}, ${this.profissao}`)
        }
    }

    console.log(objeto)
    objeto.exibirResumo()

// Versão ES5 ::::::::::::::::::::::

// Versão ES6 !!!! :::::::::::::::::::::: 

    let objeto2 = {
        nome,
        idade,
        sexo,
        profissao,

        exibirResumo(){
            console.log(`${this.nome}, ${this.idade} anos, ${this.sexo}, ${this.profissao}`)
        }
    }

// Versão ES6 !!!! :::::::::::::::::::::: 
    
console.log(objeto2)
objeto2.exibirResumo()
