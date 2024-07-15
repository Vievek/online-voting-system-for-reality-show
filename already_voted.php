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
    <link rel="stylesheet" href="css/already_voted.css">
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
    <h1>Hello <?php echo $user ?> ! </h1>
    <h1>you have already voted</h1>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>