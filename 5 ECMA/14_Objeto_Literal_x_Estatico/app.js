// ECMA 2015 :: OO - Objeto Literal
//

// Objeto com notação de classe, segundo ES6
    class Produto{
        
        constructor(descricao, preco){
            this.descricao = descricao
            this.preco = preco        
        }
        
        verDescricao(){
            console.log(`${this.descricao} por apenas ${this.preco}`)  
        }
    }

    let produto = new Produto('Computador', 3000)

    console.log(produto)

    produto.verDescricao()

// Objeto com notação de classe, segundo ES6

// Objeto com notação Literal

    let produtoLiteral = {
        descricao:'Geladeira',
        preco: 1500,
        verDescricao: function(){
            console.log(`${this.descricao} por apenas ${this.preco}`)
        }
    }

    console.log(produtoLiteral)
    produtoLiteral.verDescricao()

// Objeto com notação Literal
