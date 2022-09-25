//Funções Construtoras : Encapsulando Métodos e Atributos.


//Exemplo do exercício anterior.................................................... :
    // let Carro1 = function() {
    //     this.cor1 = 'Amarelo'
    //     this.modelo1 = 'Chevette'
    //     this.velocidadeAtual1 = 0
    //     this.velocidadeMaxima1 = 180 //Não passa de 18kmh

    //     this.acelerar1 = function(){
    //         let velocidade1 = this.getVelocidadeAtual1() + 50
    //         if(velocidade1 > this.velocidadeMaxima1){
    //             velocidade1 = this.velocidadeMaxima1 //Não passa de 18kmh
    //         }
    //         this.setVelocidadeAtual1(velocidade1) 
    //     }
    //     this.getVelocidadeAtual1 = function(){
    //         return this.velocidadeAtual1
    //     }
    //     this.setVelocidadeAtual1 = function(velocidadeAtual1){
    //         this.velocidadeAtual1 = velocidadeAtual1
    //     }
    // }

    // let carro1 = new Carro1()

    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
    // carro.acelerar1()
    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
    // carro.acelerar1()
    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
    // carro.acelerar1()
    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
    // carro.acelerar1()
    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
    // carro.acelerar1()
    // //Não passa de 18kmh
    // carro.acelerar1()
    // console.log(`A velocidade atual é: ${carro.getVelocidadeAtual1()}`)
/*----------------------------------------------------------------------------------*/

/*EXEMPLO DE ENCAPSULAMENTO ....................................................... */

    let Carro = function() {
        
        var velocidadeMaxima = 180 //(Privado)Fazendo vel.Max como variavel dentro do escopo da função!
        var quilometrosRodados = 0

        this.cor = 'Amarelo'
        this.modelo = 'Chevette'
        this.velocidadeAtual = 0
        

        this.acelerar = function(){
            let velocidade = this.getVelocidadeAtual() + 50
            if(velocidade > velocidadeMaxima){
                velocidade = velocidadeMaxima //Não passa de 18kmh
                
            }
            this.setVelocidadeAtual(velocidade) 
            setQuilometrosRodados(0.07)
            console.log(quilometrosRodados)
        }
        this.getVelocidadeAtual = function(){
            return this.velocidadeAtual
        }
        this.setVelocidadeAtual = function(velocidadeAtual){
            this.velocidadeAtual = velocidadeAtual
        }

        var setQuilometrosRodados = function(q){
            quilometrosRodados += q
        }
    }

    let carro = new Carro()

    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    carro.acelerar()
    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    carro.acelerar()
    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    carro.acelerar()
    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    carro.acelerar()
    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    //Não passa de 18kmh
    carro.acelerar()
    console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()}`)
    console.log(carro)

/*EXEMPLO DE ENCAPSULAMENTO ....................................................... */
