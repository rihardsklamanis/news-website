<?php 
session_start();


if ($_SESSION["role"] != 2 && $_SESSION["role"] != 3 && $_SESSION["role"] != 4) {
    header("location: ../../home.php?error=notenoughrights");
    exit();
}


?>

<nav>
        <div class="logo-name">
            <span class="logo_name">TechNews</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="users.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Users</span>
                </a></li>
                <li><a href="addarticles.php">
                    <i class="uil uil-file-plus"></i>
                    <span class="link-name">Add Article</span>
                </a></li>
                <li><a href="articles.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Articles</span>
                </a></li>
                <li><a href="categories.php" >
                    <i class="uil uil-books"></i>
                    <span class="link-name">Categories</span>
                </a></li>
                <li><a href="comments.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comments</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="home.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Return</span>
                </a></li>
            </ul>
        </div>
    </nav>