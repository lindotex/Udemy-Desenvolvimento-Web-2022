// ECMA 2015 :: OO - Pilar da Herança
//
// Superclasses e Subclasses : Classes que herdam classes de outras classes.
// ClassePai e ClasseFilha (child) : Também podem ser conhecidas assim.


// ::::::::::::: SEM HERANÇA ::::::::::::::::::::

    // // cachorro:::::::::::::::::::::::::

    //     class Cachorro {

    //         constructor(){
    //             this.cor = 'branco e marrom'
    //             this.tamanho = 30
    //             this.orelhas = 'Grandes e caidas'
    //         }

    //         correr(){
    //             console.log('Correr')
    //         }
            
    //         dormir(){
    //             console.log('Dormir')        
    //         }
            
    //         rosnar(){
    //             console.log('Rosnar')
    //         }
    //     }
    // // :::::::::::::::::::::::::::::::::::::::
        
    // // Pássaro :::::::::::::::::::::::::::::::
        
    //     class Passaro{
            
    //         constructor(){
    //             this.cor = 'Branco e Marrom'
    //             this.tamanho = 10
    //             this.bico = 'Curto'
    //         }
            
    //         voar(){
    //             console.log('Voar')
                
    //         }
    //         dormir(){
    //             console.log('Dormir')
    //         }
    //     }

    // // :::::::::::::::::::::::::::::::::::::::

    // let cachorro = new Cachorro()
    // let passaro = new Passaro()

    // console.log(cachorro)
    // console.log(passaro)

    // // Cachorro e Passaro tem Atributos e Métodos em comum!
    // // this.cor, this.tamanho, dormir()...

// ::::::::::::: /SEM HERANÇA ::::::::::::::::::::

// ::::::::::::: COM HERANÇA ::::::::::::::::::::

    //SUPERCLASSE : ANIMAIS (Classe Pai) --------

        // TODOS OS ANIMAIS
            class Animal{

                constructor(){
                    this.cor = ''
                    this.tamanho = null
                    this.peso = null
                }

                dormir(){
                    console.log(`Dormiu`)  
                }
            }

        // TODOS OS ANIMAIS

    //SUPERCLASSE : ANIMAIS (Classe Pai) --------

    // SUBCLASSES : ANIMAIS (Classe Filho) ------

        // cachorro:::::::::::::::::::::::::

            class Cachorro extends Animal {

                constructor(){
                    super()
                    this.orelhas = 'Grandes e caidas'
                }

                correr(){
                    console.log('Correr')
                }   
                
                rosnar(){
                    console.log('Rosnar')
                }
            }
        // :::::::::::::::::::::::::::::::::::::::
            
        // Pássaro :::::::::::::::::::::::::::::::
            
            class Passaro extends Animal{
                
                constructor(){
                    super()
                    this.bico = 'Curto'
                }
                
                voar(){
                    console.log('Voar')                    
                }
            }

        // :::::::::::::::::::::::::::::::::::::::

        // Papagaio ::::::::::::::::::::::::::::::

            class Papagaio extends Passaro{

                constructor(){
                    super()
                    this.saberFalar = true
                }
                falar(){
                    console.log('falar')
                }
            }

        // Papagaio ::::::::::::::::::::::::::::::

    // SUBCLASSES : ANIMAIS (Classe Filho) ------

    let cachorro = new Cachorro()
    let passaro = new Passaro()
    let papagaio = new Papagaio()

    console.log(cachorro)
    console.log(passaro)
    console.log(papagaio)

    papagaio.falar()
    papagaio.dormir()
    papagaio.voar()

// ::::::::::::: /COM HERANÇA ::::::::::::::::::::