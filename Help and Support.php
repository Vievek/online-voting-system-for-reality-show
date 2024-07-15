<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_ID'])){
    header('location:login_form.php');
    exit;
}
$user_ID = $_SESSION['user_ID'];
$name = "";
$email ="";
$subject ="";
$message ="";
$services ="";

if(isset($_POST['submit'])){
    echo "Form submitted!";
        $UID = $user_ID;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $services = $_POST['services'];

        $sql = "INSERT into feedback(UID,name,email,subject,message,services)
        values('$UID','$name','$email','$subject','$message','$services')";

       if(mysqli_query($conn,$sql)){
            echo '<script>location.replace("Contestant.php")</script>';
        }else{
            echo "Some thing Error" . $conn->error;
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
    <link rel="stylesheet" href="css/help.css">
</head>
<body>
    <script src="Help.js"></script>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
    <div class="helpcontainer">
        <h1 class="topic">Help & Support</h1>
        <div class="form-container">
            <form action="Help and Support.php" method="POST">
                <div class="input-group">
                    <label for="name"><b><i>Name</i></b></label>
                    <input type="text" id="name" name="name" class="input-field" >
                </div>
                <div class="input-group">
                    <label for="email"><b><i>Email</i></b></label>
                    <input type="email" id="email" name="email" class="input-field" >
                </div>
                <div class="input-group">
                    <label for="subject"><b><i>Subject</i></b></label>
                    <input type="text" id="subject" name="subject" class="input-field" >
                </div>
                <div class="input-group">
                    <label for="message"><b><i>Message</i></b></label>
                    <textarea id="message" name="message" class="input-field" ></textarea>
                </div>
                <p class="services-title"><b>What are the services do you want?</b></p>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="services[]" value="General Inquiry">General Inquiry</label><br>
                    <label><input type="checkbox" name="services[]" value="Account Assistance">Account Assistance</label><br>
                    <label><input type="checkbox" name="services[]" value="Technical Support">Technical Support</label><br>
                    <label><input type="checkbox" name="services[]" value="Voting Assistance">Voting Assistance</label><br>
                </div>
                <button type="submit" name="submit" class="submit-button">Submit</button>
            </form>
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
