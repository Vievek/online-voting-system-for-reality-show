<?php
 @include 'config.php';

session_start();

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
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/Contestant.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="body">
    
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="hero">
            <h2>Your Favourite Singers</h2>
            <p>Click to see the profile</p>
        </div>
        <div class="main-container">
            <div class="box">
                <a href='ContestantProfile.php?conNO=1'>
                    <img src="img/Contestants/1.Maanasi G Kannan.jpeg.jpg" alt="Singer 1">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=2'>
                    <img src="img/Contestants/2.Pooja Venkat.jpg" alt="Singer 2">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=3'>
                    <img src="img/Contestants/3.anand-aravindakshan.png" alt="Singer 3">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=4'>
                    <img src="img/Contestants/4.Bharath K. Rajesh.jpg" alt="Singer 4">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=5'>
                    <img src="img/Contestants/5.Anu Anand.jpg" alt="Singer 5">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=6'>
                    <img src="img/Contestants/6.Rakshita Suresh.jpg" alt="Singer 6">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=7'>
                    <img src="img/Contestants/7. Priyanka NK.jpg" alt="Singer 7">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=8'>
                    <img src="img/Contestants/8.Abhijith Anilkumar.jpg" alt="Singer 8">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=9'>
                    <img src="img/Contestants/9.Priya Jerson.jpg" alt="Singer 9">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=10'>
                    <img src="img/Contestants/10.Vrusha Balu.jpg" alt="Singer 10">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=11'>
                    <img src="img/Contestants/11. abhilash venkitachalam.jpg" alt="Singer 11">
                </a>
            </div>
            <div class="box">
                <a href='ContestantProfile.php?conNO=12'>
                    <img src="img/Contestants/12.Sridhar Sena.jpg" alt="Singer 12">
                </a>
            </div>
            
        </div>
    
   </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>

    </section>
</body>

</html>