<?php


    include 'php/classes/dbh.classes.php';
    $dbh = new Dbh();
    $search = urldecode($_GET["search"]);
        $stmt = $dbh->connect()->prepare("SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        WHERE Title like '%$search%';
        ORDER BY ID DESC;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: news.php?category=");
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Search | TechnoNews</title>
</head>
<body>
    
    <?php include "php/includes/header.php"; ?>

    <main class="main-content">

<article class="latest-news">
            <div class="latest-news-top">
                <h4 class="latest-title">
                    Our Latest Posts
                </h4>
            </div>
            <div class="latest-news-items">
            <?php foreach($news as $newsitem){ ?>
            <div class="latest-news-item">
                <div class="inner-img">
                    <img src="images/<?php echo $newsitem['imageURL']; ?>" alt="Nvidia Video Cards" class="latest-news-image">
                    <div class="category-wrapper">
                        <p class="news-category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                    </div>
                </div>
                <div class="news-details">
                    <h5 class="news-title">
                        <a href="../../article.php?id=<?php echo $newsitem['ID']; ?>"><?php echo $newsitem['Title']; ?></a>
                    </h5>
                    <div class="news-bottom">
                        <p class="author"><a href=""><?php echo $newsitem['Author']; ?></a></p>
                        <p class="release-time"><?php echo $newsitem['PostDate']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
            </div>
        </article>
        <?php include "php/includes/newsletter.php"; ?>
    </main>

    <?php include "php/includes/footer.php"; ?>
</body>
</html>
