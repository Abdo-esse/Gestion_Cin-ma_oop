<?php 
require './src/Admin.php';
// require_once './src/Film.php';

$admin= new Admin('abdel ilh','jorf','19','07007087','abdo/esse');
$admin->update('Incephgj', 'Science-fiction', '123min', '2010-07-16', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt',2);
echo "<pre>";
// print_r($admin->delete(1));
print_r($admin->lecrure());
echo "</pre>";