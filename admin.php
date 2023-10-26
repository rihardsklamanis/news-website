<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Test Article | TechnoNews</title>
</head>
<body>
    
    <?php include "php/includes/header.php"; ?>

    <main class="main-content">
        
        <section class="admpanel-wrapper">
                    <div class="panel">
                        <form action="php/includes/insertNews.php" method="POST" class="form" enctype="multipart/form-data" style="display: flex; flex-direction: column;">
                            <label for="title">Enter Article Title:</label>
                            <input type="text" name="title" id="title">
                            <label for="category">Enter Category:</label>
                            <input type="text" name="category" id="category">
                            <label for="title">Write Text Of An Article:</label>
                            <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                            <label for="title">Upload Article Image:</label>
                            <input type="file" name="imageToUpload" id="imageToUpload"><br>
                            <input type="submit" name="submit" value="Insert">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include "php/includes/footer.php"; ?>
    
</body>
</html>
