<?php

    include "../../php/classes/dbh.classes.php";
    $dbh = new Dbh();

    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare("DELETE FROM comments WHERE ID = $id");


    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../comments.php");
        exit();
    }

    $stmt = null;

    // Going back to page
    header("location: ../../comments.php");

?>