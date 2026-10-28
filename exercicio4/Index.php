<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1 = new Livro('Dom Casmurro', 1899, 'Machado de Assis');
$livro1->mostrarLivro();

echo '<br>';

$livro2 = new Livro('O Pequeno Príncipe', 1943, 'Antoine de Saint-Exupéry');
$livro2->mostrarLivro();

echo '<br>';

$revista = new Revista('Ciência Hoje', 2025, 120);
$revista->mostrarRevista();

?>
