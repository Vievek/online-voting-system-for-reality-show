<?php
    @include 'config.php';

    session_start();
    // $Fname = $_SESSION['Fname'];
    $last_inserted_id = null;

    if(isset($_SESSION['last_inserted_id'])){
        $last_inserted_id = $_SESSION['last_inserted_id'];
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/contactedit.css">
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="contacteditcontainer">
            <h1>Thank you for your response!</h1>
            <p>Would you like to make any changes to your response?</p>
            <div class="contacteditbtn">
                <button ><a href='contactusupdate.php?edit=<?php echo $last_inserted_id ?>' >Edit</a></button> &nbsp;
                <button ><a href='contactusDelete.php?del=<?php echo $last_inserted_id ?>' >Delete</a></button>
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