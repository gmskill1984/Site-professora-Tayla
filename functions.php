<?php
 
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{

 $username = "3347591_tayla";
 $password = "Miguelevivian@12";

  $conn = new PDO('mysql:host=fdb18.awardspace.net;dbname=3347591_tayla', $username, $password);
//   
   return $conn;
}
 
 
 
/**
 * Cria o hash da senha, usando MD5 e SHA-1
 */
function make_hash($str)
{
$Criptografado = $str; 


return $Criptografado;
}


 
 
/**
 * Verifica se o usuário está logado
 */
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}
