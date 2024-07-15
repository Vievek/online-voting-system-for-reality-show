<?php
     @include 'config.php';
    
    session_start();
    if(isset($_POST['submit'])){

        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $message = $_POST['message'];


        $sql = "INSERT into contactus(Fname,Lname,email,country,message)values('$Fname','$Lname','$email','$country','$message')";

        if(mysqli_query($conn,$sql)){
            $last_id = mysqli_insert_id($conn);
            $_SESSION['last_inserted_id'] = $last_id;
            header("Location: contactedit.php");
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
    <meta name="description" content="Contact Us Page">
    <meta name="keywords" content="contact, message, form, email">
    <meta name="author" content="Your Name">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/contactus.css"> 
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
          <div class="contactcontainer">
              <div class="contactinfo">
                <h2>Contact Us</h2>
              </div>
              <div class="contactusform">
                <div class="contactdetails">
                    <p><strong>Email:</strong> contact@legatovotes.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p><strong>Address:</strong> 1234 Melody Lane, Harmony City, USA</p>
                    <p><strong>Office Hours:</strong></p>
                    <p>Monday-Friday: 9:00 AM - 5:00 PM</p>
                    <p>Saturday-Sunday: Closed</p>
                </div>

                <form action="contactus.php" method="POST">
                      <h2>Send Us A Message</h2>
                      <div class="formBox">
                          <div class="inputBox ">
                              <span>First Name</span>
                              <input type="text" name="Fname" required>
                          </div>
                          <div class="inputBox ">
                              <span>Last Name</span>
                              <input type="text" name="Lname" required>
                          </div>
                          <div class="inputBox ">
                              <span>Email Address</span>
                              <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}">
                          </div>
                          <div class="inputBox ">
                              <span>Country</span>
                              <input type="text" name="country" required>
                          </div>
                          <div class="inputBox ">
                              <span>Please enter a message</span>
                              <textarea name="message" required></textarea>
                          </div>
                          <div class="submit ">
                              <input type="submit" name="submit" value="Send" id="submit">
                          </div>
                      </div>
                </form>
              </div>
          </div>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>

    <script src="contactus.js"></script>
</body>
</html>
