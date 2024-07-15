<?php
   @include 'config.php';

   session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user =  $_SESSION['user_name'] ;

    $contestantNo = $_GET['conNO'];
    
    $sql ="SELECT * FROM contestants WHERE CID = '$contestantNo'";
    $run = mysqli_query($conn,$sql);

    while($row =mysqli_fetch_array($run)){
        $CID = $row['CID'];
        $name = $row['name'];
        $img = $row['img'];
        $description = $row['description'];
        $performance = $row['performance'];
        $votes=$row['votes'];
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/ContestantProfile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
         <div class="profile-card">
            <div class="left">
                <img src="<?php echo $img?>" alt="Singer 1">
                <a href="VotingPage.php">
                    <button>Vote Now</button>
                </a>
            </div>
            <div class="right">
                <h2><?php echo $name?></h2>
                <p><?php echo $description?></p>
                <div class="iframe"><?php echo $performance?></div>
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