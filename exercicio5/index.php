<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro = new Cachorro('Rex', 5, 'Labrador');
$cachorro->latir();

echo '<br>';

$gato = new Gato('Mimi', 2, 'Branco');
$gato->miar();

?>
