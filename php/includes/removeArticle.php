<?php
    include "../../php/classes/dbh.classes.php";
    $dbh = new Dbh();

    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare("DELETE FROM comments WHERE News_ID = $id");

    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../articles.php");
        exit();
    }

    $stmt = null;

    $stmt = $dbh->connect()->prepare("DELETE FROM article WHERE ID = $id");


    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../articles.php");
        exit();
    }

    $stmt = null;

    // Going back to page
    header("location: ../../articles.php");
?>