<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id = $_POST['id'];

    try 
    {
        $sql = "DELETE FROM user WHERE id = $id";

        echo ($sql);

        $res = $db->exec($sql);
    } 
    catch (PDOException $e) 
    {
        // Display an error message if the delete operation fails
        echo "Error: " . $e->getMessage();
    }
} 
else 
{
    echo('No method post');
}
?>
