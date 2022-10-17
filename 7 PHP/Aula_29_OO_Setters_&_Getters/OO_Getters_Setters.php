<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Getters_Setters</title>
</head>
    <h2>OO_Getters_Setters</h2>

    <?php

    //Modelo
    class Funcionario {

        //Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //Métodos Setters e Getters || Convenção para manipulação do objeto.

            //Setter
            function setNome($nome){
                $this->nome = $nome;
            }
            function setTelefone($telefone){
                $this->telefone = $telefone;
            }
            function setNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }

            //Getter
            function getNome(){
                return $this->nome;
            }
            function getTelefone(){
                return $this->telefone;

            }
            function getNumFilhos(){
                return $this->numFilhos;
            }

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


    // Funcionário 'JOSÉ'
    $y = new Funcionario();
    $y->setNome('José');
    $y->setTelefone('22 99900 5656');
    $y->setNumFilhos(2);
    // Imprimindo resumo pelo método:
    echo $y->resumirCadFunc();
    echo '<br/>';
    // Imprimindo resumo concatenando métodos getters:
    echo $y->getNome() .' possui ' . $y->getNumFilhos() . ' Filhos, seu contato é ' . $y->getTelefone() . '.';
    echo '<hr/>';

    // Funcionário 'MARIA'
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setTelefone('22 8789 3445');
    $x->setNumFilhos(6);

    // Imprimindo resumo pelo método:
    echo $x->resumirCadFunc();
    echo '<br/>';
    // Imprimindo resumo concatenando métodos getters:
    echo $x->getNome() .' possui ' . $x->getNumFilhos() . ' Filhos, seu contato é ' . $x->getTelefone() . '.';
    echo '<hr/>';

    ?>


<body>


</body>
</html>

