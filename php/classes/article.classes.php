<?php

class Article extends Dbh {

    function getArticle() {
        $id = $_GET['id'];

        $stmt = $this->connect()->prepare("SELECT  a.ID, a.Title AS Title, a.PostDate AS PostDate,  a.Content AS Content, a.imageURL AS imageURL, 
                                            u.Username AS Author, c.Name AS Category FROM article AS a
                                            INNER JOIN category AS c ON Category_ID = c.ID
                                            INNER JOIN user AS u on Author_ID = u.ID
                                            WHERE a.ID=$id;");
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <div class="article-header">
                <h2 class="article-title">ERROR: Article is not found!</h2>
            </div>
            <?php exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null; 
        foreach($news as $news_item){ ?>
            <article class="main-posts" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/<?php echo $news_item['imageURL']; ?>');">
                <div class="inner-main-posts">
                    <div class="main-posts-right">
                        <div class="main-post-details">
                            <div class="post-info">
                                <p class="category"><a href="#"><?php echo $news_item['Category']; ?></a></p>
                                <p class="post-time"><?php echo $news_item['PostDate']; ?></p>
                            </div>
                            <h1 class="article-title">
                                <a href="#"><?php echo $news_item['Title']; ?></a>
                            </h1>
                        </div>
                        <div class="post-bottom">
                            <div class="author-wrapper">
                                <img src="../images/Image Placeholder.png" alt="Article author image" class="author-img">
                                <p class="author"><?php echo $news_item['Author']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="article-content">
                <p class="article-paragraph">
                    <?php echo $news_item['Content']; ?>
                </p>
                
            </article>
        <?php }
    }

    function outputComments() {
        $id = $_GET['id'];

        $stmt = $this->connect()->prepare("SELECT
                                            PostDate,
                                            u.Username AS Author,
                                            Content
                                            FROM comments 
                                            INNER JOIN user AS u
                                            ON Author_ID = u.ID
                                            WHERE News_ID=$id
                                            ORDER BY PostDate DESC");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <div class="Comment-Error">
                <h2 class="Error-Text">There is no comments yet!</h2>
            </div>
            <?php exit();
        }

        // Fetch all results into $news array
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;

        foreach($comments as $comment_item){ ?>

            <div class="comment-item">
                    <img src="../images/Image Placeholder.png" alt="User image" class="user-icon">
                        <div class="comment-item-content">
                            <div class="comment-upper">
                                <p class="username"><?php echo $comment_item['Author']; ?></p>
                                <p class="posttime"><?php echo $comment_item['PostDate']; ?></p>
                            </div>
                            <p>
                                <?php echo $comment_item['Content']; ?>
                            </p>
                        </div>
                </div>
        <?php } 
    }

    function countArticles() {
        $stmt = $this->connect()->prepare("SELECT COUNT(ID) as 'count' FROM article");

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../articles.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            
            <?php exit();
        }
        $articlecount= $stmt->fetch(PDO::FETCH_ASSOC);

        echo $articlecount["count"];
    }

    function outputArticles() {

        $stmt = $this->connect()->prepare("SELECT a.ID AS 'ID', a.Title AS 'Title', u.Username AS 'Author', c.Name AS 'Category', a.PostDate AS 'Postdate',
        (SELECT COUNT(ID) FROM comments WHERE News_ID = a.ID) AS Comments
        FROM article AS a
        INNER JOIN user AS u ON a.Author_ID = u.ID
        INNER JOIN category AS c ON a.Category_ID = c.ID;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../articles.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null; ?>

        <div class="article-data">
            <div class="data title">
                <span class="data-title">Article Title</span>
            <?php
            foreach($articles as $article){ ?>
                <span class="data-list"><?php echo $article['Title'] ?></span>
            <?php } ?>
            </div>
            <div class="data names">
                <span class="data-title">Author</span> <?php
            foreach($articles as $article){ ?>
                <span class="data-list"><?php echo $article['Author'] ?></span>
            <?php } ?>
            </div>
            <div class="data names">
                <span class="data-title">Category</span> <?php
                foreach($articles as $article){ ?>
                <span class="data-list"><?php echo $article['Category'] ?></span>
            <?php } ?>
            </div>
            <div class="data postdate">
                <span class="data-title">Post Date</span> <?php
                foreach($articles as $article){ ?>
                <span class="data-list"><?php echo $article['Postdate'] ?></span>
            <?php } ?>
            </div>
            <div class="data comments">
                <span class="data-title">Comments</span> <?php
                foreach($articles as $article){ ?>
                <span class="data-list"><?php echo $article['Comments'] ?></span>
            <?php } ?>
            </div>
            <div class="data type">
                <span class="data-title">Edit Article</span> <?php
                foreach($articles as $article){ ?>
                <span class="data-list"><a href="editArticle.php?id=<?php echo $article['ID'] ?>">Edit</a></span>
            <?php } ?>
            </div>
            <div class="data status">
                <span class="data-title">Remove Article</span> <?php
                foreach($articles as $article){ ?>
                <span class="data-list"><a href="php/includes/removeArticle.php?id=<?php echo $article['ID'] ?>">Remove</a></span>
            <?php } ?>
            </div>
        </div>
        <?php
    }
}

?>