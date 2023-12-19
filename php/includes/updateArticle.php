<?php


include '../classes/dbh.classes.php';
$dbh = new Dbh();

$id = $_GET['id'];
$title = $_POST['article-title'];
$textarea = $_POST['article-content'];
$category = $_POST['categories'];

$stmt = $dbh->connect()->prepare('UPDATE article
SET 
    title = ?,
    content = ?,
    category_id = ?
WHERE
    id = ?;');

if (!$stmt->execute(array($title, $textarea, $category, $id))) {
    $stmt = null;

    header("location: ../../home.php?error=stmtfailed");

    exit();
}
header("location: ../../articles.php?ArticleChanged");


?>