<?php
require_once 'carro.php';
require_once 'moto.php';

$carro= new Carro('Santana', 2017, 4);
$carro-> exibirInformacoes();
$carro->mostrarCarro();

echo "<br>";

$moto = new Moto('Tr15', 2023, 255);
$moto-> exibirInformacoes();
$moto->mostrarMoto();
?>