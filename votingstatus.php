<?php
    @include 'config.php';

    session_start();

    if(!isset($_SESSION['user_ID'])){
        header('location:login_form.php');
        exit;
    }
    $user_ID = $_SESSION['user_ID'];

    if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    }
    $name = $_SESSION['user_name'];

    $sql="SELECT* FROM voting WHERE UID = '$user_ID'";
    $run = mysqli_query($conn,$sql);
    if(mysqli_num_rows($run) > 0){
        $votingsts = "casted ";
    }else{
        $votingsts = "not casted yet";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/votingsts.css">
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
    <h1>Hello <?php echo $name?></h1>
    <h1>your vote is <?php echo $votingsts?></h1>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>