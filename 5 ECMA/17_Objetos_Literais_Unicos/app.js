//Objetos literais

let assinatura = {
    idCliente:1000,
    descricaoServico: 'Acesso a internet',
    
    status(){
        console.log('Ativo')
    }
}

console.log(assinatura.descricaoServico)


let y = assinatura

console.log(y.descricaoServico)


y.descricaoServico = "Internet + TV + Telefone"

console.log(assinatura.descricaoServico)
console.log(y.descricaoServico)
