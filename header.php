<?php
 @include 'config.php';

 //session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user =  $_SESSION['user_name'] ;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <section class="navbar">
            <div class="logo">
                <img src="img/header/F-removebg-preview.png" alt="Logo">
            </div>
            <div class="nav-links">
                <a href="Home.php">Home</a>
                <a href="Contestant.php">Contestant</a>
                <a href="VotingPage.php">Vote</a>
                <a href="Leaderboard.php">Leaderboard</a>
                <a href="Contactus.php">Contact Us</a>
            </div>
            <div class="login-links">
                <a href="user_profile_page.php">Hello <?php echo $user ?>!</a>
            </div>
        </section>

        <section class="headerimg" >
            <img src="img/header/v2.png" id="slide-3"> 
        </section>

    </header>
</body>
</html>