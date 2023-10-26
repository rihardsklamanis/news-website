<?php

class News extends Dbh {

    function getHeroArticle() {
        $stmt = $this->connect()->prepare('SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        ORDER BY ID DESC LIMIT 1;');

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <article class="main-posts" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/<?php echo $newsitem['imageURL']; ?>');">
                <section class="inner-main-posts">
                    <div class="main-posts-right">
                        <div class="main-post-details">
                            <div class="post-info">
                                <p class="category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                                <p class="post-time"><?php echo $newsitem['PostDate']; ?></p>
                            </div>
                            <h1 class="article-title">
                                <a href="article.php?id=<?php echo $newsitem['ID']; ?> "><?php echo $newsitem['Title']; ?></a>
                            </h1>
                        </div>
                    </div>
        <?php }
    }

    function getWeekNews() {
        $stmt = $this->connect()->prepare('SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        ORDER BY ID DESC LIMIT 5;');

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="latest-posts-item">
                <a href="article.php?id=<?php echo $newsitem['ID']; ?>" class="image-link"><img src="../images/<?php echo $newsitem['imageURL']; ?>" alt="Nvidia video cards" class="latest-post-image"></a>
                <div class="latest-posts-item-details">
                    <div class="latest-posts-info">
                        <p class="category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                        <p class="post-time"><?php echo $newsitem['PostDate']; ?></p>
                    </div>
                    <h6 class="latest-article-title">
                        <a href="article.php?id=<?php echo $newsitem['ID']; ?>"><?php echo $newsitem['Title']; ?></a>
                    </h6>
                </div>
            </div>
        <?php }
    }

    function getLatestNews() {
        $stmt = $this->connect()->prepare('SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        ORDER BY ID DESC;');

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="latest-news-item">
                <div class="inner-img">
                    <img src="../images/<?php echo $newsitem['imageURL']; ?>" alt="Nvidia Video Cards" class="latest-news-image">
                    <div class="category-wrapper">
                        <p class="news-category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                    </div>
                </div>
                <div class="news-details">
                    <h5 class="news-title">
                        <a href="article.php?id=<?php echo $newsitem['ID']; ?>"><?php echo $newsitem['Title']; ?></a>
                    </h5>
                    <div class="news-bottom">
                        <p class="author"><a href=""><?php echo $newsitem['Author']; ?></a></p>
                        <p class="release-time"><?php echo $newsitem['PostDate']; ?></p>
                    </div>
                </div>
            </div>
        <?php }
    }

    function filterNews($category) {
        $stmt = $this->connect()->prepare("SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        WHERE c.Name = '$category';
        ORDER BY ID DESC;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="latest-news-item">
                <div class="inner-img">
                    <img src="../images/<?php echo $newsitem['imageURL']; ?>" alt="Nvidia Video Cards" class="latest-news-image">
                    <div class="category-wrapper">
                        <p class="news-category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                    </div>
                </div>
                <div class="news-details">
                    <h5 class="news-title">
                        <a href="article.php?id=<?php echo $newsitem['ID']; ?>"><?php echo $newsitem['Title']; ?></a>
                    </h5>
                    <div class="news-bottom">
                        <p class="author"><a href=""><?php echo $newsitem['Author']; ?></a></p>
                        <p class="release-time"><?php echo $newsitem['PostDate']; ?></p>
                    </div>
                </div>
            </div>
        <?php }
    }

    function searchNews() {
        $search = urldecode($_GET["Search"]);
        $stmt = $this->connect()->prepare("SELECT a.ID, Title, PostDate, Content, imageURL,
        c.Name AS Category,
        u.Username AS Author
        FROM article AS a
        INNER JOIN category AS c 
        ON a.Category_ID = c.ID
        INNER JOIN user AS u
        ON a.Author_ID = u.ID
        WHERE Title like '$search';
        ORDER BY ID DESC;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($news as $newsitem){ ?>
            <div class="latest-news-item">
                <div class="inner-img">
                    <img src="../images/<?php echo $newsitem['imageURL']; ?>" alt="Nvidia Video Cards" class="latest-news-image">
                    <div class="category-wrapper">
                        <p class="news-category"><a href="#"><?php echo $newsitem['Category']; ?></a></p>
                    </div>
                </div>
                <div class="news-details">
                    <h5 class="news-title">
                        <a href="article.php?id=<?php echo $newsitem['ID']; ?>"><?php echo $newsitem['Title']; ?></a>
                    </h5>
                    <div class="news-bottom">
                        <p class="author"><a href=""><?php echo $newsitem['Author']; ?></a></p>
                        <p class="release-time"><?php echo $newsitem['PostDate']; ?></p>
                    </div>
                </div>
            </div>
        <?php }
    }
}



?>