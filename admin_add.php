<?php
    @include 'config.php';

    if(isset($_POST['contestant'])){

        // $CID = $_POST['CID'];
        $name = $_POST['name'];
        $votes = $_POST['votes'];

        $sql = "INSERT into contestants(name,votes)values('$name','$votes')";

        if(mysqli_query($conn,$sql)){
            echo '<script>location.replace("admin_page.php")</script>';
        }else{
            echo "Some thing Error" . $connection->error;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   
    <main>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" >
                    <div class="card-header">
                       <h1>Add Contestants</h1>
                    </div>
                   <div class="card-body">
                   <form action="admin_add.php" method="post">
                         <div class="form-group">
                            <label >name</label>
                            <input  name="name" class="form-control" placeholder="Enter name"required>
                        </div>
                         <div class="form-group">
                            <label >votes</label>
                            <input  name="votes" class="form-control" placeholder="Enter votes" required>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="contestant" value="Register">
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    </main>
    
</body>
</html>