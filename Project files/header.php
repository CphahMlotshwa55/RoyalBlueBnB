<?php 
    $authenticated = false;
    if(isset($_SESSION['Client_Username'])){
        $authenticated= true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Blue BnB</title>
    <link rel="stylesheet" href="universal.css">
</head>
<header>
    <nav class="navbar">
        <?php
        if ($authenticated) {
        ?>
        <div>
            <a href="index.php"> <img src="../Pictures/Royal-Blue.png" alt="Royal Blue" width="100" height="100"> </a>
        </div>
        <ul class="navlinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">What We Offer</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li class="dropdown">
                    <a href="#"><?= $_SESSION['Client_Username']?></a>
                    <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="book.php">Reserve your Room</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
            </li>
        </ul>
        <?php
        } else {
        ?>
        <div>
            <a href="index.php"> <img src="../Pictures/Royal-Blue.png" alt="Royal Blue" width="100" height="100"> </a>
        </div>
        <ul class="navlinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">What We Offer</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="register.php">Sign in</a></li>
        </ul>
        <?php
        } 
        ?>
    </nav>
</header>