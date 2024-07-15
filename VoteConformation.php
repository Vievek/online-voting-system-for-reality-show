
<?php
    @include 'config.php';

    session_start();
   if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    }
    if(!isset($_SESSION['user_ID'])){
    header('location:login_form.php');
    }
    $user =  $_SESSION['user_name'] ;
    $uid = $_SESSION['user_ID'];

    $sql ="SELECT * FROM voting WHERE UID ='$uid'";
    $run = mysqli_query($conn,$sql);

    while($row =mysqli_fetch_array($run)){
        $VID = $row['VID'];
        $UID = $row['UID'];
        $name = $row['name'];
        $votedContestant = $row['Contestant'];
    }
    
     $contestant = "";

    if(isset($_POST['submit'])){

        $contestant = $_POST['contestant'];

        $sql1 = "UPDATE voting SET Contestant='$contestant' WHERE VID = '$VID'";
        $sql2 = "UPDATE contestants SET votes = votes+1 WHERE name ='$contestant'";
        $sql3 = "UPDATE contestants SET votes = votes-1 WHERE name ='$votedContestant'";

        if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)&& mysqli_query($conn,$sql3)){
            echo '<script>location.replace("Contestant.php")</script>';
        }else{
            echo "Some thing Error" . $connection->error;
        }
    }

    $_SESSION['VID'] = $VID;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/VoteConformation.css"> 
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="initial">
            <div class="vcheading">Your vote has been added to the poll</div>
            <div class="selection">
                <div class="sec">
                    <p>Change of mind</p>
                    <button id="edit">Edit Vote</button>
                </div>
                <div class="sec">
                    <p>Confirm  Your Vote</p>
                    <button>Submit</button>
                </div>
            </div>
          
        </div>

        <div class="overlay"></div>
        <div class="popup">
            <form method="post" action="VoteConformation.php" >
                <table border="1">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>Contestant ID</th>
                    <th>Contestant Name</th>
                    <th>Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         @include 'config.php';

                        $sql ="SELECT * FROM contestants";
                        $run = mysqli_query($conn,$sql);

                        $id = 1;

                        while($row =mysqli_fetch_array($run)){
                            $CID = $row['CID'];
                            $name = $row['name'];
                            $img = $row['img'];
                            $description = $row['description'];
                            $performance = $row['performance'];
                            $votes=$row['votes'];
                        
                    ?>

                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $CID ?></td>
                        <td><?php echo $name ?></td>
                        <td><input type="radio" name="contestant" value="<?php echo $name ?>" required></td>
                    </tr>

                    <?php $id++; } ?>
                </tbody>
                </table>
                <div class="popupbtn">
                    <button type="submit" name="submit">Confirm</button>
                    <button ><a href='VoteDelete.php?del=<?php echo $votedContestant ?>'>Delete</a></button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    <script src="VoteConformationPage.js"></script>
</body>
</html>


      
          
         

  