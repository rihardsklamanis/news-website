<?php
    include "../../php/classes/dbh.classes.php";
    $dbh = new Dbh();

    // Grabbing the data
    $category = $_POST['category'];

    $stmt = $dbh->connect()->prepare("INSERT INTO category (Name) VALUES (?);");

        if (!$stmt->execute(array($category))) {
            $stmt = null;
            header("location: ../../categories.php");
            exit();
        }

        $stmt = null;

    // Going back to page
    header("location: ../../categories.php");



?>
