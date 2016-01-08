<?php

//if (isset($_POST['submit'])) {
//	include 'db.php';
  //  $pdo = Database::connect();

require_once 'db.php';


     $sql = $db_con->prepare("INSERT INTO klanten (voornaam, achternaam, geboortedatum, telefoonnummer, emailadres, geslacht)
    VALUES (:voornaam,:achternaam,:geboortedatum,:telefoonnummer,:emailadres,:geslacht)");

	$sql->bindParam(':voornaam', $_POST['voornaam']);
	$sql->bindParam(':achternaam', $_POST['achternaam']);
	$sql->bindParam(':geboortedatum', $_POST['geboortedatum']);
	$sql->bindParam(':telefoonnummer', $_POST['telefoonnummer']);
	$sql->bindParam(':emailadres', $_POST['emailadres']);
	$sql->bindParam(':geslacht', $_POST['geslacht']);
	$sql->execute();

    if($sql->execute()){
                    echo 'succes';
                }else{
                	echo 'fout';
                }
//}
?>