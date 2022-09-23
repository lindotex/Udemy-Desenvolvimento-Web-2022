// ECMA 2015 :: OO - Operador Super
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

let papagaio = new Papagaio(true, 'verde', 25, 500)
let papagaio2 = new Papagaio(false, 'azul', 30, 400)
let papagaio3 = new Papagaio(false, 'amarelo', 100, 2500)

console.log(papagaio)
console.log(papagaio2)
console.log(papagaio3)