<?php
    @include 'config.php';
    $delete = $_GET['del'];

    session_start();
    $VID = $_SESSION['VID'];

    $sql1= "DELETE FROM voting WHERE VID ='$VID'";
    $sql2 = "UPDATE contestants SET votes = votes-1 WHERE name ='$delete'";


    if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
            echo '<script>location.replace("Contestant.php")</script>';
        }else{
            echo "Some thing Error" . $conn->error;
        }
?>