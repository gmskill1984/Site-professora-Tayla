<?php
 session_start(); 
 


require 'init.php';


/*
   $username = "3347591_tayla";
 $password = "XXXXXXX";
$conn= null;
try {
  $conn = new PDO('mysql:host=fdb18.awardspace.net;dbname=3347591_tayla', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
*/


// inclui o arquivo de inicialização




 
// resgata variáveis do formulário
$email = isset($_POST['nome']) ? $_POST['nome'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';
 
if (empty($email) || empty($password))
{
    echo "Informe email e senha";
    exit;
}
 
$PDO = db_connect();

 
$sql = "select * from login";



//echo $sql;


$stmt = $PDO->prepare($sql);



 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $password);
 
$stmt->execute();
//echo $stmt;

 
$users = $stmt->fetchAll();

 
if (count($users) <= 0)
{


    echo "
<html>
<title>Titulo do site</title>
<head>

</head>
<style type='text/css'>
<!--
.style2 {font-size: 24px}
-->
</style>
</head>

<body>
<span class='style2'>Usuarios ou senha errados</span>
</body>
</html>";

    exit;
}
else{
 
// pega o primeiro usuário
$user = $users[0];

$_SESSION['logged_in'] = true;
$_SESSION['user_email'] = $email;



echo "
<html>
<title>Titulo do site</title>
<head>
<meta http-equiv='refresh' content=1;url='http://professoratayla.atwebpages.com/sistema.php'>
</head>
<body>
</body>
</html>";
}
?>

