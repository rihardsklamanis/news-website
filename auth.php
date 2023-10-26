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
        <div class="content-wrapper">
            <section class="auth-section">
                <h2 class="section-title">Authorization</h2>
                <form action="php/includes/process-signin.php" method="post" class="auth-form">
                    <input type="text" name="uid" placeholder="Enter Your Username...">
                    <input type="password" name="pwd" placeholder="Enter Your Password....">
                    <input type="submit" name="submit" placeholder="Submit">
                </form>
            </section>
            <section class="reg-section">
                <h2 class="section-title">Registration</h2>
                <form action="php/includes/process-signup.php" method="post" class="reg-form">
                    <input type="text" name="uid" placeholder="Enter Your Username...">
                    <input type="email" name="email" placeholder="Enter Your E-Mail Address...">
                    <input type="password" name="pwd" placeholder="Enter Your Password....">
                    <input type="password" name="pwdrep" placeholder="Confirm Your Password....">
                    <input type="submit" name="submit" placeholder="Submit">
                </form>
            </section>
        </div>
    </main>

    <?php include "php/includes/footer.php"; ?>
    
</body>
</html>
