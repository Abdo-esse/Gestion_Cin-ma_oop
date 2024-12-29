<?php 
// require './src/Admin.php';
require './src/PespProjection.php';
// require_once './src/Film.php';

// $admin= new Admin('abdel ilh','jorf','19','07007087','abdo/esse');
// $admin->update('Incephgj', 'Science-fiction', '123min', '2010-07-16', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt',2);
// echo "<pre>";
// // print_r($admin->delete(1));
// print_r($admin->lecrure());
// echo "</pre>";
 
$responsabl = new ResponsableProjections('abdel ilh', 'jorf', '19', '07007087', 'abdo/esse');
$projection = $responsabl->ajoterProjection('10:00 pm', 'Khawarizmi', '2010-07-16');
echo "<pre>";

echo $projection;
echo "</pre>";