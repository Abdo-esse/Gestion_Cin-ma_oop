<?php 
 class Persson
{
    private $id;
    private $fullName;
    private $city
    private  $age;
    private $tele ;
    private $pasword;

    public function __construct($fullName,$city,$age,$tele,$pasword)
    {
        $this->fullName=$fullName;
        $this->city=$city;
        $this->age=$age;
        $this->tele=$tele;
        $this->pasword=$pasword;
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