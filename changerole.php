<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Change Role | Admin Panel</title> 
</head>
<body>
    
    <?php include "php/includes/sidebaradm.php"; ?>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-plus"></i>
                    <span class="text">Choose Role</span>
                </div>
            </div>

            <div class="article">
            <?php $id = $_GET['id']; ?>

                <form action="php/includes/change-role.php?id=<?php echo $id?>" method="post" class="article-form">
                    
        
                    <select name="roles" class="article-title" id="roles" required>
                        <?php 
                        include "php/classes/dbh.classes.php";
                        include "php/classes/users.classes.php";
                        
                        $u = new Users();
                        $u->getRoles()

                        ?>
                    </select>
                    <input type="submit" value="Submit" class="article-submit">
                </form>

        </div>
    </section>
</body>
</html>