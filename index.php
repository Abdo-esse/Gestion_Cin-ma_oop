<?php 
require './src/Admin.php';
// require_once './src/Film.php';

$admin= new Admin('abdel ilh','jorf','19','07007087','abdo/esse');
$admin->ajouterFilm('Inception', 'Science-fiction', '123', '2010-07-16', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt');
echo "<pre>";
print_r($admin->delete(1));
print_r($admin->lecrure());
echo "</pre>";