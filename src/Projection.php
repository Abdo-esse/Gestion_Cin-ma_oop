<?php

class Projection
{
    private $id;
    private  $horaire;
    private $dateProj;
    private $salle;

    public function __construct($id,$horaire,$salle,$dateProj)
    {
        $this->id=$id;
        $this->horaire=$horaire;
        $this->salle=$salle;
        $this->dateProj=$dateProj;
    }
    
  public function  getId()
  {
    return $this->id;
  }
  public function  getHoraire()
  {
    return $this->horaire;
  }
  public function  getDateProj()
  {
    return $this->dateProj;
  }
  public function  getSalle()
  {
    return $this->salle;
  }
  public function setId($id)
  {
    $this->id=$id;
  }
  public function setHoraire($horaire)
  {
    $this->horaire=$horaire;
  }
  public function setSalle($salle)
  {
    $this->salle=$salle;
  }
  public function setDateProj($dateProj)
  {
    $this->dateProj=$dateProj;
  }
  // Méthode pour convertir l'objet en chaîne
  public function __toString() {
    return "Projection: [id: {$this->id},Horaire: {$this->horaire}, Salle: {$this->salle}, Date: {$this->dateProj}]";
}
}


