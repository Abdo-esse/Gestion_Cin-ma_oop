<?php
class Voiture{
    //les atributes
     private $marque;
     private $color;
// les visibilite 
// publique : les donnees internes et les méthode sont accessible par tous.



    //les méthode
   // la constructeurs par defaut est public function __construct(){}, mais nous avons un constructeur d'initialisation ce qui construit un objet, initialise éventuellement les membres de la classe
    public function __construct($marque,$color){
        //Le mot clé $this nous permet d’utiliser les méthodes et les propriétés de notre classe.
        $this->marque=$marque;
        $this->color=$color;
    } 
    public function __toString()
    {
        //La fonction __toString() renvoie le contenu de la chaîne d'un élément
        return "la voiture :". $this->marque . ", de colore " . $this->color;
    }
} 
