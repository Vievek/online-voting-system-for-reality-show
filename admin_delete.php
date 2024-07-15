<?php
     @include 'config.php';
    $delcon = $_GET['delcon'];

    $sql = "DELETE from contestants where CID ='$delcon'";

    if(mysqli_query($conn,$sql)){
            echo '<script>location.replace("admin_page.php")</script>';
        }else{
            echo "Some thing Error" . $connection->error;
        }


    $deluser = $_GET['deluser'];

    $sql = "DELETE from user where id ='$deluser'";

    if(mysqli_query($conn,$sql)){
            echo '<script>location.replace("admin_page.php")</script>';
        }else{
            echo "Some thing Error" . $connection->error;
        }
?>