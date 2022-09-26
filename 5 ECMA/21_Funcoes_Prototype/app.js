//Object Prototype || Herança


// Literal
let a1 = {
    cor: 'Branco',
    modelo: 'Airbus a380',
    levantarVoo(){
        console.log('Levantou Voo')
    }
}

// Construtora

let AviaoF = function(){
    this.cor = 'Azul',
    this.modelo = 'Boeing 777',
    this.levantarVoo = function (){console.log('Levantou Voo')}

}

let a2 = new AviaoF()

// Classe

class AviaoC{
    constructor() {
        this.cor = 'Vermelho';
        this.modelo = 'Embraer Ejets'
    }
    levantarVoo() {
        console.log('Levantou Voo')
    }
}

let a3 = new AviaoC()

console.log(a1)
console.log(a2)
console.log(a3)