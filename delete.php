<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id = $_POST['id'];

    try 
    {
        $sql = "DELETE FROM user WHERE id = $id";

        $res = $db->exec($sql);
    } 
    catch (PDOException $e) 
    {

    }
} 
else 
{

}
?>
