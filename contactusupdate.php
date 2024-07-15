<?php
     @include 'config.php';
    session_start();
    $edit = $_GET['edit'];

    $sql = "select *from contactus where id = '$edit'";
    $run = mysqli_query($conn,$sql);
    
    

    while($row =mysqli_fetch_array($run)){
        $id = $row['id'];
        $Fname = $row['Fname'];
        $Lname = $row['Lname'];
        $email = $row['email'];
        $country = $row['country'];
        $message = $row['message'];
    }

    if(isset($_POST['submit'])){

      $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $message = $_POST['message'];


      $sql = "UPDATE contactus SET Fname= '$Fname',Lname='$Lname',email='$email',country='$country',message='$message' where id = '$edit'";

      if(mysqli_query($conn,$sql)){
          unset($_SESSION['last_inserted_id']);
          echo '<script>location.replace("contactus.php")</script>';
      }else{
          echo "Some thing Error" . $conn->error;
      }
  }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/contactus.css">
       
        <script src="contactusjs2.js"></script>
       

       
    </head>

    <body>
        <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
      <div class="contactuscontainer">
        <div class="contactinfo">
            <h2>Contact Us update</h2>
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

            <form action="contactusupdate.php?edit=<?php echo $edit ?>" method="POST">
              <h2>Send Us A Message</h2>
              <div class="formBox">
                <div class="inputBox ">
                  <input type="text" name="Fname"value="<?php echo $Fname ?>" required>
                  <span>First Name</span>
                </div>
                <div class="inputBox ">
                  <input type="text" name="Lname" value="<?php echo $Lname ?>" required>
                  <span>Last Name</span>
                </div>
                <div class="inputBox ">
                  <input type="text" name="email"value="<?php echo $email ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}">
                  <span>Email Address</span>
                </div>
                <div class="inputBox">
                  <input type="text" name="country" value="<?php echo $country ?>" required>
                  <span>Country</span>
                </div>
                <div class="inputBox ">
                  <textarea name="message"><?php echo isset($message) ? $message : ''; ?></textarea>
                  <span>Please enter a message</span>
                </div>
                <div class="submit">
                  <input type="submit" name="submit" value="Update" id="submit">
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

 


    