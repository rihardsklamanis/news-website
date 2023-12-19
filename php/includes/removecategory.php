<?php

    include "../../php/classes/dbh.classes.php";
    $dbh = new Dbh();

    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare("DELETE FROM article WHERE category_ID = $id");


    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../categories.php");
        exit();
    }

    $stmt = null;

    $stmt = $dbh->connect()->prepare("DELETE FROM category WHERE id = $id");

    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../categories.php");
        exit();
    }

    $stmt = null;

    // Going back to page
    header("location: ../../categories.php");

?>