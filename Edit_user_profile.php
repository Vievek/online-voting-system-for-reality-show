<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    exit;
}

@include 'config.php';

$user_name = $_SESSION['user_name'];

$sql = "SELECT * FROM user WHERE name='$user_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];
    $sql_update = "UPDATE user SET bio='$bio', gender='$gender' WHERE name='$user_name'";
    $result_update = mysqli_query($conn, $sql_update);
    if($result_update){
        echo "<script>alert('Profile updated successfully');</script>";
        header('location: user_profile_page.php'); 
        exit;
    } else {
        echo "<script>alert('Error updating profile');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
<div class="container mt-5">
    <h2>Edit Profile</h2>
    <form method="post">
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" id="bio" name="bio"><?php echo $row['bio']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
    </form>
</div>
</main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>

</body>
</html>
