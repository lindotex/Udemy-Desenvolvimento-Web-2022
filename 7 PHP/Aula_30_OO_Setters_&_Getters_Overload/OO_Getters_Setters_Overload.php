<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Getters_Setters_Overload</title>
</head>
    <h2>OO_Getters_Setters_Overload</h2>

    <?php

    //Modelo
    class Funcionario {

        //Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //Assunto da aula Overload
        public $cargo = null;
        public $salario = null;

        // Getters & Setters Overload para $cargo e $salario

            function __set($atributo, $valor){
                $this->$atributo = $valor;
            }

            function __get($atributo){
                return $this->$atributo;
            }

        //Métodos Setters e Getters || Convenção para manipulação do objeto.

            //Substituir esse bloco pelo modelo OVERLOAD ACIMA. REUSO DE CODIGO.
            //Setter
            // function setNome($nome){
            //     $this->nome = $nome;
            // }
            // function setTelefone($telefone){
            //     $this->telefone = $telefone;
            // }
            // function setNumFilhos($numFilhos){
            //     $this->numFilhos = $numFilhos;
            // }

            // //Getter
            // function getNome(){
            //     return $this->nome;
            // }
            // function getTelefone(){
            //     return $this->telefone;

            // }
            // function getNumFilhos(){
            //     return $this->numFilhos;
            // }

        //Métodos
        function resumirCadFunc() {
            return "$this->nome  possui $this->numFilhos Filhos, seu contato é $this->telefone.";
        }

        function modificarNumFilhos($numFilhos) {
            // Afetar o atributo 'numFilhos' do objeto.

            $this->numFilhos = $numFilhos;

            return 'Alterado o número de filhos do funcionário.';
        }

        function modificarContato($telefone){
            //Alterar o contato do Funcionário.
            $this->telefone = $telefone;

            return 'Alterado o número de telefone do funcionário.';
        }
    }


    // Funcionário 'JOSÉ' - USANDO OVERLOAD.
    $y = new Funcionario();
    $y->__set('nome','Jose'); // Usando Overload.
    $y->__set('telefone','22 9 9988 7766'); // Usando Overload.
    $y->__set('numFilhos', 2);
    // Imprimindo resumo pelo método:
    echo $y->resumirCadFunc();
    echo '<br/>';
    // Imprimindo resumo concatenando métodos getters:
    echo $y->__get('nome') .' possui ' . $y->__get('numFilhos') . ' Filhos, seu contato é ' . $y->__get('telefone') . '.';
    echo '<hr/>';

    // Funcionário 'MARIA'
    $x = new Funcionario();
    $x->__set('nome','Maria');
    $x->__set('telefone','22 8789 3445');
    $x->__set('numFilhos',6);

    // Imprimindo resumo pelo método:
    echo $x->resumirCadFunc();
    echo '<br/>';
    // Imprimindo resumo concatenando métodos getters:
    echo $x->__get('nome') .' possui ' . $x->__get('numFilhos') . ' Filhos, seu contato é ' . $x->__get('telefone') . '.';
    echo '<hr/>';

    ?>


<body>

</body>
</html>

