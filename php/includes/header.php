<?php
    session_start();

    if (isset($_SESSION["ID"]) && $_SESSION["role"] == 5) {
        header("location: ../../banned.php?error=userisbanned");
    }
?>
<header class="header">
    <div class="header-upper">
        <nav class="category">
            <ul>
                <li><a href="news.php?category=">News</a></li>
                <li><a href="news.php?category=Software">Software</a></li>
                <li><a href="news.php?category=Hardware">Hardware</a></li>
                <li><a href="news.php?category=Innovation">Innovation</a></li>
                <li><a href="news.php?category=Gaming">Gaming</a></li>
                
            </ul>
        </nav>
        <div class="social">
            <ul>
                <li><a href="#">IG</a></li>
                <li><a href="#">TW</a></li>
                <li><a href="#">FB</a></li>
                <li><a href="#">YT</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="header-lower">
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <?php 
                if (isset($_SESSION["role"]) && ($_SESSION["role"] == 2 || $_SESSION["role"] == 3 || $_SESSION["role"] == 4)) {
                    ?> <li><a href="users.php">Admin</a></li> <?php
                }

                ?>
            </ul>
        </nav>
        <div class="lower-right">
            <?php
            if (isset($_SESSION["ID"])) {
            ?>
                <a href="php/includes/logout.php"><button class="button auth-btn">Logout</button></a>
            <?php } else { ?>
                <a href="/auth.php"><button class="button auth-btn">Authorization</button></a>
            <?php } ?>
        </div>
    </div>
    <hr>
    <div class="search-wrapper">
        <form action="search.php" method="get" class="search-form">
            <input type="text" name="search" id="search" class="search" placeholder="Search for an article...">
            <input type="submit" class="search-submit" value="Search">
        </form>
    </div>
</header>
