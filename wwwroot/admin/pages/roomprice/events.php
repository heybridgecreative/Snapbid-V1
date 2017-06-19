<?php
// List of events
 $json = array();

$room = $_GET['room_id'];

 // Query that retrieves events
 $requete = "SELECT * FROM snapbid_room_prices WHERE room_id = '$room'";

 // connection to the database
 try {
 $bdd = new PDO('mysql:host=cmwebdesign.co.uk.mysql;dbname=cmwebdesign_co_', 'cmwebdesign_co_', 'FRUDexBh');
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }
 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

echo $requete;

?>