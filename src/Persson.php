<?php 
 class Persson 
{
    protected $id;
    protected $fullName;
    protected $city;
    protected  $age;
    protected $tele ;
    protected $pasword;

    public function __construct($fullName,$city,$age,$tele,$pasword)
    {
        $this->fullName=$fullName;
        $this->city=$city;
        $this->age=$age;
        $this->tele=$tele;
        $this->pasword=$pasword;
    }
     public function getFullName(){
        return $this->fullName;
     }
     public function getCity(){
        return $this->city;
     }
     public function getAge(){
        return $this->age;
     }
     public function getTele(){
        return $this->tele;
     }
     public function getPasword(){
        return $this->pasword;
     }

    public function setFullName($fullName){
        $this->fullName=$fullName;
    }
    public function setCity($city){
        $this->city=$city;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setTele($tele){
        $this->tele=$tele;
    }
    public function setPasword($pasword){
        $this->pasword=$pasword;
    }
    
    

}