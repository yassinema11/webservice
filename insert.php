<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $email = $_POST['email'];


        $sql = "INSERT INTO user (name, username, password, email) VALUES ('$name','$username','$password','$email')";

        $res = $db->exec($sql);        

        echo "Data inserted successfully!";
 
}
else
{
    echo('no method post');
}
?>
