<?php 
 include "classes/client.class.php";
 if (!empty($_POST)) {
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $adress=$_POST['adresse'];
 $tel=$_POST['tel'];
 $date=$_POST['date'];
 if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
echo $nom;
echo $prenom;
echo $tel;
echo $date;
echo $id;
$Client= new Client();
  $updated=$Client->upadateClient($id , $nom , $prenom , $date , $adress , $tel);
  
  }

 
?>