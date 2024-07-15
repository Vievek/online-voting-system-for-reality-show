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

    $check_voted_sql = "SELECT * FROM voting WHERE UID='$uid'";
    $row = mysqli_query($conn, $check_voted_sql);
    if(mysqli_num_rows($row) > 0){
        header('location:already_voted.php');
        exit(); 
    }


    $contestant = "";

    if(isset($_POST['submit'])){

        $contestant = $_POST['contestant'];

        $sql1 = "INSERT INTO voting (UID,name,Contestant) VALUES ('$uid','$user','$contestant')";
        $sql2 = "UPDATE contestants SET votes = votes+1 WHERE name ='$contestant'";

        if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
            echo '<script>location.replace("VoteConformation.php")</script>';
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
    <link rel="stylesheet" href="css/Votingpage.css">
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
        <h1>Cast Vote your Favourite Contestant</h1>
        <div class="votingform">
            <form action="VotingPage.php" method="POST">
            <section class="table_body">
            <table border="1">
                <thead >
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
                </section>
                <div class="voting_btn">
                    <button><a href="howtovote.php">How to Vote</a></button>
                    <button type="submit" name="submit">Submit</button>
                </div>
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