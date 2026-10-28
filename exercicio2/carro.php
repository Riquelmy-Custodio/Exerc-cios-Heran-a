<?php
require_once "veiculo.php";

class carro extends veiculo{
    private string $quantidadePortas;

    public function __construct($marca, $ano, $quantidadePortas){
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function mostrarCarro(){
        echo 'Carro: ' . $this->quantidadePortas . "<br>";
    }
 }

?>