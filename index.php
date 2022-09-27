<?php
 
require_once 'autoload.php';

$poke = new poke();

$poke-> cadastrar ('pikachu', '1',15);

$tipo = new tipo();

$tipo->cadastrar('Eletrico', 'Lutador', 'Pequeno');

$status = new status();

$status-> cadastrar ('24','Pokemon do tipo rato, filha da puta');

$saida = new saida ();

$saida-> cadastrar ($poke, $status, $tipo);

echo $saida ->imprimir();







