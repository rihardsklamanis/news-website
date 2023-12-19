<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Categories | Admin Panel</title> 
</head>
<body>
    
    <?php include "php/includes/sidebaradm.php"; ?>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-plus"></i>
                    <span class="text">Add Category</span>
                </div>
            </div>

            <div class="article">

                <form action="php/includes/process-category.php" method="post" class="article-form">
                    
                    <input type="text" id="category article-title" class="category, article-title" name="category" placeholder="Insert New Category..." required>
                    <input type="submit" value="Submit" class="article-submit">
                </form>
                
                <div class="overview">
                    <div class="title">
                        <i class="uil uil-books"></i>
                        <span class="text">Existing Categories</span>
                    </div>
    
                    <div class="boxes">
                        
                        <?php 
                            include "php/classes/dbh.classes.php";
                            include "php/classes/category.classes.php";

                            $c = new Category();
                            $c->outputCategories();
                        ?>

                    </div>
                </div>
        </div>
    </section>
    <script src="js/texteditor.js"></script>
</body>
</html>