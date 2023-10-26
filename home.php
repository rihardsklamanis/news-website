<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Home Page | TechnoNews</title>
</head>
<body>
    
    <?php include "php/includes/header.php"; ?>

    <main class="main-content">
        
    <?php include 'php/classes/dbh.classes.php';
                        include 'php/classes/news.classes.php';
                        $n = new News();
                        $n->getHeroArticle();
                        ?>
                <section class="latest-posts">
                    <div class="inner-latest-posts">
                        <h4 class="latest-posts-title">
                            This Weeks Posts
                        </h4>
                        <?php 
                        $n->getWeekNews(); 
                        ?>
                    </div>
                </section>
            </section>
        </article>

        <article class="latest-news">
            <div class="latest-news-top">
                <h4 class="latest-title">
                    Our Latest Posts
                </h4>
                <button class="button all-btn" onclick="window.location.href='news.php?category='">View All</button>
            </div>
            <div class="latest-news-items">
                <?php $n->getlatestnews(); ?>
            </div>
        </article>
        <?php include "php/includes/newsletter.php"; ?>
    </main>

    <?php include "php/includes/footer.php"; ?>
</body>
</html>