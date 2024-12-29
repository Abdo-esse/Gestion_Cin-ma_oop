<?php
require_once 'Persson.php';
require_once 'Film.php';

class Client extends Persson 
{
     public function ajouterFilm($titre,$genre,$durée,$dateSortie,$réalisateur,$distribution){
        $id=rand(1,100);
        return new Film($id,$titre,$genre,$durée,$dateSortie,$réalisateur,$distribution)
     }

}