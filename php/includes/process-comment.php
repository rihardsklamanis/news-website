<?php

if (isset($_POST["submit"])) {
    session_start();
    // Grabbing the data
    $author = $_SESSION["ID"];
    $comment = $_POST['comment'];
    $fid = $_GET['id'];

    // Instantiate LoginContr Class
    include "../classes/dbh.classes.php";
    include "../classes/comment.classes.php";
    include "../classes/comment-contr.classes.php";
    $comment = new CommentContr($author, $comment, $fid);

    // Running error handlers and user signup
    $comment->addComment();

    // Going back to page
    header("location: ../../article.php?id=$fid");

}


?>