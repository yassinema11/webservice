<?php

$host = 'localhost'; 
$dbname = 'bd_user';
$username = 'root';
$password = '';

try 
{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected !";


} 
catch (PDOException $e) 
{
    echo("Connection failed: " . $e->getMessage());
}
?>
