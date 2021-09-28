<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Amigo de quatro patas</title>
<link rel="stylesheet" href="css/style.css" media="screen"> 
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="scripts/script.js"></script>
	<link rel="icon" type="imagem/png" href="images/logo.ico" />

<body>



<div id ="textocadastro">

Matéria cadastrada com sucesso!


</div>

<a href="http://professoratayla.atwebpages.com/cadastroMateria.php">Voltar a página principal </a>

</body>


<html>
<head>




<?php 


require 'functions.php';



 $materia = $_POST['materia'];
 $sala = $_POST['sala'];
 $escola = $_POST['escola'];
 $link = $_POST['link'];

 




 $username = "3347591_tayla";
 $password = "Miguelevivian@12";

try {
  $conn = new PDO('mysql:host=fdb18.awardspace.net;dbname=3347591_tayla', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "conectou";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$sql = "INSERT INTO Materia (materia, sala,escola,link) VALUES (?, ?,?,?)";
$sqlpre = $conn->prepare($sql);
$sqlarray = array("$materia", "$sala","$escola","$link");
$sqlpre->execute($sqlarray);


