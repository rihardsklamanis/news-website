<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrep = $_POST["pwdrep"];

    // Instantiate SignupContr Class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $email, $pwd, $pwdrep);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to page
    header("location: ../../auth.php?successful-signup");

}


?>