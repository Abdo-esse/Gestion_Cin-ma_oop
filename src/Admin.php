<?php
require_once 'Persson.php';
require_once 'Film.php';

class Admin extends Persson 
{
 public function ajouterFilm($titre, $genre, $duree, $dateSortie, $realisateur, $distribution)
{
    $pdo = $this->database(); 
    $sql = "INSERT INTO films (titre, genre, duree, dateSortie, realisateur, distribution) 
            VALUES ('$titre', '$genre', $duree, '$dateSortie', '$realisateur', '$distribution')";

   
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
}
 public function lecrure(){
    $pdo = $this->database(); 
    $sql = "select * FROM films";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
  public function delete($id){
    $pdo = $this->database(); 
    $sql = "DELETE from films WHERE id='$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return "la suprussion a ete bien";


  }


     public function database()
     {
       return new PDO('mysql:host=localhost;dbname=Gestion_Cinéma', "root", "");
   
     }
}