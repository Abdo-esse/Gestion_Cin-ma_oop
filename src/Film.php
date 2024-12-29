<?php 
class Film 
{
  private $id;
  private $titre;
  private $genre;
  private $duree ;
  private $dateSortie ;
  private $realisateur ;
  private $distribution;

  public function __construct($id,$titre,$genre,$duree,$dateSortie,$realisateur,$distribution)
  {
    $this->id=$id;
    $this->titre=$titre;
    $this->genre=$genre;
    $this->duree=$duree;
    $this->dateSortie=$dateSortie;
    $this->realisateur=$realisateur;
    $this->distribution=$distribution;

  }
  public function getId()
  {
    $this->id;
}
  public function getGenre()
  {
    return $this->genre;
}
  public function getDuree()
  {
    return $this->duree;
}
  public function getDateSortie()
  {
    return $this->dateSortie;
}
  public function getRealisateur()
  {
    return $this->realisateur;
}
  public function getDistribution()
  {
    return $this->distribution;
}
public function steId($id){

}
}