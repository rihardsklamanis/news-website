<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Test Article | TechnoNews</title>
</head>
<body>
    
    <?php include "php/includes/header.php"; ?>

    <main class="main-content">
        <?php 
            include 'php/classes/dbh.classes.php';
            include 'php/classes/article.classes.php';
            $a = new Article();
            $a->getArticle();
            $id = $_GET['id']; 
        ?>

        <article class="comment-section">
            <div class="comment-input-wrapper">
                <img src="../images/Image Placeholder.png" alt="User image" class="user-icon">
                <form action="php/includes/process-comment.php?id=<?php echo $id ?>" method="post" class="comment-form">
                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write your comment here"></textarea>
                    <input type="submit" class="button submit-comment" name="submit" placeholder="Post Comment">
                </form>
            </div>
            <div class="comment-wrapper">
                <?php $a->outputComments(); ?>
            </div>
        </article>

        <?php include "php/includes/newsletter.php"; ?>

    </main>

    <?php include "php/includes/footer.php"; ?>
    
</body>
</html>