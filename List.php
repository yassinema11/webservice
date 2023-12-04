<?php
include "db.php";

$query =$db->prepare("SELECT * FROM user");

$query->execute();

if($query->rowCount() > 0)
{
    $data=$query->fetchAll(PDO::FETCH_ASSOC);
}
?>