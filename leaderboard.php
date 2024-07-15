<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
   <link rel="stylesheet" href="css/leaderboard.css">

</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="leaderboardcard">
            <h1>Leaderboard</h1>
            <div class="card-body">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">CID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            @include 'config.php';

                            $sql = "SELECT * FROM contestants ORDER BY votes DESC";
                            $run = mysqli_query($conn, $sql);

                            $rank = 1;

                            while ($row = mysqli_fetch_array($run)) {
                                $CID = $row['CID'];
                                $name = $row['name'];
                                $votes = $row['votes'];
                        ?>
                        <tr>
                            <td><?php echo $rank++ ?></td>
                            <td><?php echo $CID ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $votes ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
