 <?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>
 
    <main>
       <div class="home-intro">
         <div>ENJOY EVERY MOMENT HERE</div>
         <div>EVERY SATURDAY AT 9.30PM</div>
         <div><span>THE PLACE WHERE TEEN SINGERS PERFORM THEIR TALENTS</span></div>
       </div>
       <div class="home-text">
         <h1>What is LEGATO</h1>
         <P>LEGATO is one of the most popular reality show which created with the aim of identifying talented teen singers of the country</P>
         <div class="home-text-container">
            <div class="home-text-box">
                <h1>Experienced Judge Board</h1>
                <p>With very experienced and talented musicians, the judge board can select the best performers by making perfect decisions & can improve and bring their talents to the peak level.</p>
            </div>
            <div class="home-text-box">
                <h1>Al Based Voting System</h1>
                <p>Our online voting system was built with the use of Artificial Intelligence technology. It is one of the most advanced voting system currently available and with minimum errors.</p>
            </div>
            <div class="home-text-box">
                <h1>Newest Sound Systems</h1>
                <p>With our sound systems built using latest technologies, singers can perform well and very easily without any sound related issues to deliver an unbelieveble musical experience to the audience.</p>
            </div>           
         </div>
       </div>
       <div class="image-gallery">
            <img src="img/home/1.png" alt="">
            <img src="img/home/2.png" alt="">
            <img src="img/home/3.png" alt="">
       </div>
       <div class="home-outro">
         <h1>VOTE FOR YOUR FAVOURITE SINGER</h1>
         <div class="home-outro-btn">
            <button><a href="VotingPage.php">Vote Now</a></button>
            <button><a href="howtovote.php">How to Vote</a></button>
         </div>
       </div>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>

    
</body>
</html>

