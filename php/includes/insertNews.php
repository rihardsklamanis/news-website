<?php

session_start();

include '../classes/dbh.classes.php';
$dbh = new Dbh();


$title = $_POST['article-title'];
$textarea = $_POST['article-content'];
$author = $_SESSION["ID"];
$category = $_POST['categories'];
$target_dir = "../../images/";

$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);
$imageUrl = basename($_FILES["imageToUpload"]["name"]);

$stmt = $dbh->connect()->prepare('INSERT INTO article (Title, Content, imageURL, Author_ID, Category_ID) VALUES (?, ?, ?, ?, ?);');

if (!$stmt->execute(array($title, $textarea, $imageUrl, $author, $category))) {
    $stmt = null;

    header("location: ../../home.php?error=stmtfailed");

    exit();
}
header("location: ../../addarticles.php?ArticleInserted");


?>