// ECMA 2015 :: OO - Pilar da Encapsulamento
//
// Encapsulamento === Segurança 
//      Em JS não temos ainda a capacidade de definir com clareza o nível de 
//      segurança de um objeto (Private, Protect, Public.) como em outras linguagens.
//      Mas, para "Fazer" isto, de uma forma de CONVENÇÃO, se estabelece o padrão
//      "_atributo", afim de identificar um atributo privado...
//      Esta sendo trabalhado pra implementação de um paradigma "#atributo" para definição de 
//      um atributo privado, mas ainda não está disponivel em javaScript.
//
// GETTERS and SETTERS === Forma CONVENCIONAL de chamar um atributo de forma segura em javaScript.
//  
//  get pseudoVariavel() { return this._atributo}
//
//  set pseudoVariavel(atribuicao) { this._atributo = atribuicao}

class Tv {

    constructor(){
        // Utilizando o "_" a frente do atributo "declara" um atributo privado...
        this._relacaoCanais = Array(2, 4, 7, 5, 10)
        this._canalAtivo = 5
        this._volume = 5
    }
    
    // getters e setters : 
    // O interpretador js reconhecem os mesmos e conseguem exportar/importar valores para dentro do Objeto

    get canalAtivo() { // Pseudo-variavel GET : 6        
        return this._canalAtivo
    }

    set canalAtivo(canal) { //Pseudo-variavel SET
        // Controle
        if(this._relacaoCanais.indexOf(canal) !== -1){
            this._canalAtivo = canal
        }
       
    }

}

let tv = new Tv()

tv.canalAtivo = 10 
console.log(`Canal ativo: ${tv.canalAtivo}`) // Privado: _canalAtivo

