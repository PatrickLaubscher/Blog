<?php 

require 'form.php';
require 'text.php';
require 'personnage.php';
require 'archer.php';

$merlin = new Personnage ('Merlin');
$harry = new Personnage ('Harry');

$legolas = new Archer ('Legolas');

var_dump($merlin,$harry,$legolas);

$legolas->attaque($merlin);

echo $merlin->getVie();

?>