<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Articles | Admin Panel</title> 
</head>
<body>
    
    <?php include "php/includes/sidebaradm.php"; ?>

    <?php 
        include "php/classes/dbh.classes.php";
        include "php/classes/article.classes.php";
        include "php/classes/comment.classes.php";

        $a = new Article();
        $c = new Comment();
    ?>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Articles</span>
                </div>

                <div class="boxes">
                    <div class="box box2">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="text">Total Articles</span>
                        <span class="number"><?php $a->countArticles(); ?></span>
                    </div>
                    <div class="box box1">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total Comments</span>
                        <span class="number"><?php $c->countComments(); ?></span>
                    </div>
                </div>
            </div>

            <div class="article">
                <div class="title">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="text">All Articles</span>
                </div>

                <?php $a->outputArticles() ?>
            </div>
        </div>
    </section>
</body>
</html>