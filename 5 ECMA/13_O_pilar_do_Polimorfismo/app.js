// ECMA 2015 :: OO - Polimorfismo
//


class Animal{

    constructor(cor, tamanho, peso){
        this.cor = cor
        this.tamanho = tamanho
        this.peso = peso
    }

    dormir(){
        console.log(`Dormiu`)  
    }
}

class Passaro extends Animal{
    
    constructor(bico, cor, tamanho, peso){
        super(cor, tamanho, peso)
        this.bico = bico
    }
    
    voar(){
        console.log('Voar')                    
    }
}

class Papagaio extends Passaro{

    constructor(saberFalar, cor, tamanho, peso){
        super('medio', cor, tamanho, peso)
        this.saberFalar = saberFalar
    }
    falar(){
        console.log('falar')
    }
}

class Avestruz extends Passaro{

    constructor(cor, tamanho, peso){
        super('medio', 'preto', 250, 150)        
    }
    enterrarCabeca(){
        console.log('enterrou cabeça')
    }
    voar(){      //POLIMORFISMO DE MÉTODO : AVEZTRUZ NAO VOA!
        console.log('Avestruz Não Voa')//POLIMORFISMO DE MÉTODO : AVEZTRUZ NAO VOA!
    }//POLIMORFISMO DE MÉTODO : AVEZTRUZ NAO VOA!
}

let papagaio = new Papagaio(true, 'verde', 25, 500)
let avestruz = new Avestruz()

console.log(papagaio)
console.log(avestruz)

papagaio.voar()
avestruz.enterrarCabeca()
avestruz.voar()
