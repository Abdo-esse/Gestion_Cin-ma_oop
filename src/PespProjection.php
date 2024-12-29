
<?php 
require_once 'Persson.php';
require_once 'Projection.php';
class  ResponsableProjections extends Persson
{

//    public function  ajoterProjection($horaire,$salle,$dateProj)
//    {
//          $id=rand(1,100);
//     return new Projection($id,$horaire,$salle,$dateProj);

//    }
public function  ajoterProjection($horaire,$salle,$dateProj){
  
    $pdo= parent::database();
    $sql="insert into projections (horaire,dateProj,salle) values ('$horaire','$salle','$dateProj')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

}

    
}