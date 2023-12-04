<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

   
        $sql = "UPDATE user SET name='$name', username='$username', password='$password', email='$email' WHERE id = $id";

        $res = $db->exec($sql);        

    
} 
else 
{
}
?>
