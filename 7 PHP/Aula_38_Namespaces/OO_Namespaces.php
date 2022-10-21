<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO_Namespaces</title>
</head>
<body>
    <!--
        OO_Interfaces:
        Interfaces servem para declarar métodos comuns em diversas classes.


    -->

    <h2>OO_Namespaces</h2>

    <?php
    // Global
        // Classes em conflitos, devido aos nomes e métodos >>>
        // Namespace para resolver conflito de classes
    // Global /

    echo '<h3>Exemplo 1:: Namespaces.</h3>';

    // namespace a;
    class Cliente {
    public $nome = 'Jorge';
    public function __get($attr) {
            return $this->$attr;
        }
    }

    namespace b;
    class Cliente {
        public $nome = 'Fernando';
        public function __get($attr) {
            return $this->$attr;
        }
    }

    $c = new \A\Cliente(); //para passar o cliente do namespace A
    $c = new \B\Cliente(); //para passar o cliente do namespace B
    print_r($c);
    echo $c->__get('nome');

    ?>


<body/>

</html>

