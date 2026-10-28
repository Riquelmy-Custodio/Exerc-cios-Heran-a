<?php

require_once 'Aniamal.php';

class Gato extends Animal {
    private string $cor;

    public fucntion __construct($nome, $idade, $cor){
        parent::__construct($nome, $idade);
    }

    public function __construct($nome, $idade, $cor){
        parrent::__construct($nome, $idade)
        $this->cor = $cor;
    }

     public function miar() {
        $this->mostrarNome();
        echo 'Idade: ' . $this->getIdade() . '<br>';
        echo 'Cor: ' . $this->cor . '<br>';
        echo 'Miau!<br>';
    }
}

?>








