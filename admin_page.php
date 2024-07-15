<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/admin.css">


</head>
<body>
    

    <main>
        <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>

        <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card" >
                            <div class="card-header">
                            <h1>contetsants</h1>
                            </div>
                        <div class="card-body">
                            <button class="btn btn-success"><a href="admin_add.php" class="text-light">Add NEW</a></button>
                            <br><br>
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">CID</th>
                                    <th scope="col">name</th>
                                    <th scope="col">votes</th>
                                    <th scope="col">option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        @include 'config.php';

                                        $sql = "SELECT * from contestants";
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
                                        <td><?php echo $votes ?></td>


                                        <td>
                                            <button class="btn btn-success"><a href='admin_delete.php?delcon=<?php echo $CID ?>' class="text-light">Delete</a></button>
                                        </td>
                                    </tr>

                                    <?php $id++; } ?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>

            </div>
            
        <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card" >
                            <div class="card-header">
                            <h1>Users</h1>
                            </div>
                        <div class="card-body">
                            <br><br>
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">name</th>
                                    <th scope="col">user_type</th>
                                    <th scope="col">option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        @include 'config.php';

                                        $sql = "SELECT * from user";
                                        $run = mysqli_query($conn,$sql);

                                        $id = 1;

                                        while($row =mysqli_fetch_array($run)){
                                            $UID = $row['id'];
                                            $name = $row['name'];
                                            $user_type = $row['user_type'];
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $user_type ?></td>

                                        <td>
                                            <button class="btn btn-success"><a href='admin_delete.php?deluser=<?php echo $UID ?>' class="text-light">Delete</a></button>
                                        </td>
                                    </tr>

                                    <?php $id++; } ?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>
        </div>
        </div>
</main>

    
</body>
</html>