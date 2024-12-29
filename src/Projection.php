<?php

class Projection
{
    private  $horaire;
    private $dateProj;
    private $salle;

    public function __construct($horaire,$salle,$dateProj)
    {
        $this->horaire=$horaire;
        $this->salle=$salle;
        $this->dateProj=$dateProj;
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
  public function setHoraire($horaire)
  {
    $this->horaire=$horaire;
  }


}