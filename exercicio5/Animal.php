<?php

class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function mostrarNome(){
        echo 'Nme: ' . $this->nome . '<br>';
    }

    public function mostrarIdade(){
        echo 'Idade: ' . $this->idade . '<br>';
    }
}

$Animal = new Animal("Rex", 5);
$Animal->mostrarNome();
$Animal->mostrarIdade();

?>