<?php

require_once 'veiculo.php';

class moto extends veiculo{
     private string $cilindradas;

    public function __construct($marca, $ano, $cilindradas){
        parent::__construct($marca, $ano);
        $this->cilindradas = $cilindradas;
     }

      public function mostrarMoto(){
        echo 'Cilindradas: ' . $this->cilindradas;
    }
}

?>