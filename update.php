<?php 
 include "classes/client.class.php";
 if (!empty($_GET['id'])) {
    $id=$_GET['id'];
    $getoneClient= new Client();
    $getoneClientid=$getoneClient->getOneClient($id);
    foreach ($getoneClientid as $client) ;
 }
 require "update.phtml";


?>