<?php

    include "php/classes/dbh.classes.php";
    $dbh = new Dbh();

    $id = $_GET['id'];

    $stmt = $dbh->connect()->prepare("SELECT * FROM article WHERE ID = $id");


    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../articles.php?error=stmtfailed");
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
    $articleedit = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Edit Article | Admin Panel</title> 
</head>
<body>
    
    <?php include "php/includes/sidebaradm.php"; ?>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-file-plus"></i>
                    <span class="text">Edit Article</span>
                </div>
            </div>

            <div class="article">
                
            <?php foreach($articleedit as $article) { ?>
                <form action="php/includes/updateArticle.php?id=<?php echo $article['ID']?>" method="post" enctype="multipart/form-data" class="article-form">
                    
                    <input type="text" id="article-title" class="article-title" name="article-title" placeholder="Insert Article Title..." value="<?php echo $article['Title']?>" required>

                    <select name="categories" class="article-title" id="article-categories" value="<?php echo $article['Category_ID']?>" required>
                    <?php 
                        include 'php/classes/category.classes.php';

                        $c = new Category();
                        $c->getCategories();
                    ?>
                    </select>

                    <textarea id="article-content" class="article-content" name="article-content" placeholder="Write your article here..." required><?php echo $article['Content']?></textarea>

                    <input type="submit" value="Submit" class="article-submit">
                </form>
                <?php } ?>
        </div>
    </section>
</body>
</html>