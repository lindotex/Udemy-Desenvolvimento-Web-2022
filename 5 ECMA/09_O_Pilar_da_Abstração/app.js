// ECMA 2015 :: OO - Pilar da Abstração

// Modelo do Objeto ------------------------------
    class ContaBancaria {
        //agencia
        //numeroConta
        //saldo
        //limite
        constructor(){
            this.agencia = 1075
            this.numeroConta = 83511515
            this.saldo = 50
            this.limite = 450
        }

        depositar(valorDeposito){
            this.saldo += valorDeposito

        }

        sacar(valorSaque){
            this.saldo -= valorSaque
        }

        consultarSaldo(){
            return this.saldo
        }
    }
// Fim Modelo -------------------------------------

// ---- Chamando no DOM ---------------------------

let x = new ContaBancaria()
let y = new ContaBancaria()
    // Primeiro Estrato
console.log(x.consultarSaldo())
console.log(y.consultarSaldo())
    //Depositando em X
x.depositar(450)
console.log(x.consultarSaldo())
console.log(y.consultarSaldo())
    //Sacando de X
x.sacar(200)
console.log(x.consultarSaldo())
console.log(y.consultarSaldo())




// -----chamando no DOM ---------------------------

