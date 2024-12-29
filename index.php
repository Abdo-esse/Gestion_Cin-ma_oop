<?php 
require './src/Admin.php';
// require_once './src/Film.php';

$admin1= new Admin('abdel ilh','jorf','19','07007087','abdo/esse');
$film1= $admin1->ajouterFilm('abdel ilh','jorf','19','07007087','abdo/esse','gfgfgfg');
echo '<pre>';
var_dump($admin1);
var_dump($film1);
echo '</pre>';