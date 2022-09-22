// ECMA 2015 :: OO - Pilar da Abstração : Reflexão

// Software de marcenaria
// Cadeira & Sofá

// No Paradigma Procedural:::::::::::::::::::::::::::::::::::

    // Cadeira

        //Abstração de caracteristicas (Atributos)
        // let qtde_pernas = 4
        // let giratoria = false
        // let cor = azul

        // // Array de cadeiras
        // let cadeiras = Array()

        // cadeiras[0] = Array()
        // cadeiras[0]['qtde_pernas'] = 4
        // cadeiras[0]['giratoria'] = false
        // cadeiras[0]['cor'] = azul

        // cadeiras[1] = Array()
        // cadeiras[1]['qtde_pernas'] = 1
        // cadeiras[1]['giratoria'] = true
        // cadeiras[1]['cor'] = vermelha

        // //Abstração de ações de uma cadeira (Métodos)

        // function girar_cadeira (indice){
        //     if(cadeiras[indice]['giratoria'] === true){
        //         console.log(`${indice} Girou`)
        //     }else{
        //         console.log('cadeira ${indice} não giratória')
        //     }
        // }

        // function adicionar_cadeiras(qtde_pernas, giratoria, cor){
        //     let cadeira = Array()

        //     cadeira['qtde_pernas'] = qtde_pernas
        //     cadeira['giratoria'] = giratoria
        //     cadeira['cor'] = cor
            
        //     cadeiras.push(cadeiras)
        // }
        
        // // adicionando cadeira ao array cadeiras
        // adicionar_cadeiras(3, false, verde)

        // girar_cadeira(1)
        // girar_cadeira(2)
        
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

// No Paradigma de Orientação a Objetos :::::::::::::::::::::::

    //Abstração de Cadeiras
    class Cadeira {

        //Abstração
        constructor(qtde_pernas, giratoria, cor){
            this.qtde_pernas = qtde_pernas // Atributos
            this.giratoria = giratoria // Atributos
            this.cor = cor // Atributos
        }
        
        // Métodos!
        girarCadeira(){ 
            if(this.giratoria === true){
                console.log('Girou')
            } else {
                console.log('Não Girou')
            }
        }
    }

    // 1° Forma de Gerar Cadeira : Gerando cadeiras INSTANCIANDO a CLASSE:
    // var cadeira = new Cadeira(4, false, 'azul') // Instancia chamando Classe Cadeira com operador New
    // var cadeira2 = new Cadeira(1, true, 'vermelha') // Instancia chamando Classe Cadeira com operador New
    
    // 2° Forma de Gerar Cadeira : Gerando cadeiras em um Array:
    let cadeiras = Array()

    cadeiras.push(new Cadeira(4, false, 'azul')) // Instancia de Cadeiras
    cadeiras.push(new Cadeira(1, true, 'vermelha')) // Instancia de Cadeiras

    console.log(cadeiras)


    //console.log(cadeira)
    cadeira.girarCadeira()

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::