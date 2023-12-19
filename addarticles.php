<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Add Article | Admin Panel</title> 
</head>
<body>
    
    <?php include "php/includes/sidebaradm.php"; ?>

    <section class="dashboard">
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-file-plus"></i>
                    <span class="text">Add Article</span>
                </div>
            </div>

            <div class="article">
                

                <form action="php/includes/insertNews.php" method="post" enctype="multipart/form-data" class="article-form">
                    
                    <input type="text" id="article-title" class="article-title" name="article-title" placeholder="Insert Article Title..." required>

                    <select name="categories" class="article-title" id="article-categories" required>
                    <?php 
                        include 'php/classes/dbh.classes.php';
                        include 'php/classes/category.classes.php';

                        $c = new Category();
                        $c->getCategories();
                    ?>
                    </select>

                    <textarea id="article-content" class="article-content" name="article-content" placeholder="Write your article here..." required></textarea>

                    <input type="file" name="imageToUpload" id="imageToUpload" accept="image/*" required>

                    <input type="submit" value="Submit" class="article-submit">
                </form>
        </div>
    </section>
</body>
</html>