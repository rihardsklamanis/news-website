<?php

    include "../../php/classes/dbh.classes.php";
    $dbh = new Dbh();

    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare("UPDATE user SET Role_ID = 5 
    WHERE ID = :id");

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../users.php");
        exit();
    }

    $stmt = null;

    // Going back to page
    header("location: ../../users.php");

?>