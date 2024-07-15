<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit;
}

@include 'config.php';

$user_name = $_SESSION['user_name'];

// Retrieve user data for the logged-in user
$sql = "SELECT * FROM user WHERE name='$user_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/userprofile.css">
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="userprofilecon">
            <h2>User Profile</h2>
            <div class="card">
                <img src="img/user/user 1.png" alt="user">
                <h3 class="card-title">Hello <?php echo $row['name']; ?></h3>
                <div class="card-text">
                    <p >Email: <?php echo $row['email']; ?></p>
                    <p >Bio: <?php echo !empty($row['bio']) ? $row['bio'] : "Not given"; ?></p>
                    <p >Gender: <?php echo !empty($row['gender']) ? $row['gender'] : "Not given"; ?></p>
                </div>
                <div class="userprofilebtn">
                    <a href="Edit_user_profile.php" >Edit Profile</a>
                    <a href="user_interaction.php" >User Interaction</a>
                    <a href="logout.php" >Log out</a>
                </div>   
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
