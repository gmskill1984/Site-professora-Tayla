<?php
 
/**
 * Conecta com o MySQL usando PDO
 */


 $username = "3347591_tayla";
 $password = "Miguelevivian@12";
$conn= null;
try {
  $conn = new PDO('mysql:host=fdb18.awardspace.net;dbname=3347591_tayla', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "esta funcionando";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>