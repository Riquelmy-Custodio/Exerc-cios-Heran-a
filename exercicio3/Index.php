<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente = new Gerente('Mariana', 6500, 'Tecnologia');
$gerente->gerenciarEquipe();

echo '<br>';

$dev = new Desenvolvedor('Lucas', 4800, 'PHP');
$dev->programar();

?>
