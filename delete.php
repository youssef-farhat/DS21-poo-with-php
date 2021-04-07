<?php
include "classes/client.class.php";


if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    echo $id ;
}
 $deleteClient= new Client();
 $deleteClientid=$deleteClient->deleteClient($id) ;
  header('Location: index.php');
?>
