<?php
    @include 'config.php';
    session_start();
    $delete = $_GET['del'];

    $sql = "DELETE from contactus where id ='$delete'";

   if(mysqli_query($conn,$sql)){
    $_SESSION['last_inserted_id'] = null; 
    header("Location: contactus.php");
} else {
    echo "Something went wrong: " . $conn->error;
}
?>
