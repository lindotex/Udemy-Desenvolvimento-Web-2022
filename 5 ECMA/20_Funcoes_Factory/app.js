//Funções Factory.


//................Função Factory.................................................... :
    //lógica
    // requisição HTTP
    // resposta HTTP

    // Objetos Literais : Preenchidos Manualmente >>>>
    
        //lógica
        // requisição HTTP
        // resposta HTTP
        let Bicicleta1 = {
            cor: 'Branca',
            marcha: 'Unica',
            Aro: 12,

            pedalar() {console.log(`Método para pedalar`)}

        }
        //lógica
        // requisição HTTP
        // resposta HTTP
        let Bicicleta2 = {
            cor: 'Varmelha',
            marcha: '18',
            Aro: 26,

            pedalar() {console.log(`Método para pedalar`)}

        }

        
    // Objetos Literais : Preenchidos Manualmente >>>>
    // Funções Factories ..............................
    
        let BicicletaFactory = function(cor, marcha, aro){
            //lógica
            // requisição HTTP
            // resposta HTTP
            return {
                cor,
            marcha,
            aro,
            pedalar() {console.log(`Método para pedalar`)}
            }
        }      
    
    // Funções Factories ..............................       
    
    let Bicicleta3 = BicicletaFactory('Vinho','18','26')
    let Bicicleta4 = BicicletaFactory('Cinza','21','26')
    let Bicicleta5 = BicicletaFactory('Preta','Unica','10')
    
    console.log(Bicicleta1)
    console.log(Bicicleta2)
    console.log(Bicicleta3)
    console.log(Bicicleta4)
    console.log(Bicicleta5)
    
//................Função Factory.................................................... :



