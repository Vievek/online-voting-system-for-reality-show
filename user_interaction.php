<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_ID'])){
    header('location:login_form.php');
    exit;
}
$user_ID = $_SESSION['user_ID'];

if(isset($_POST['submit'])){
        $UID = $user_ID;
        $enjoyment_level = $_POST['enjoyment_level'];
        $agree_elimination = $_POST['agree_elimination'];
        $wildcard_decision = $_POST['wildcard_decision'];
        $next_week_guest = $_POST['next_week_guest'];
        $forum_post = $_POST['forum_post'];


        $sql = "INSERT into user_interaction(UID,enjoyment_level,agree_elimination,wildcard_decision,next_week_guest,forum_post)
        values('$UID','$enjoyment_level','$agree_elimination','$wildcard_decision','$next_week_guest','$forum_post')";

       if(mysqli_query($conn,$sql)){
            $last_id = mysqli_insert_id($conn);
            $_SESSION['last_inserted_id'] = $last_id;
            header("Location: user_interaction_edit.php");
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
    <link rel="stylesheet" href="css/userinteraction.css">
</head>

<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
        <div class="userinteractioncon">
            <h2>Polls</h2>
            <div class="userinteractionform">
                <form action="user_interaction.php" method="post">
                    <div class="poll">
                        <h3>How much did you enjoy this week's episode?</h3>
                        <div class="input">
                            <input type="radio" name="enjoyment_level" value="1"> 1
                            <input type="radio" name="enjoyment_level" value="2"> 2
                            <input type="radio" name="enjoyment_level" value="3"> 3
                        </div>                    
                    </div>
                    <div class="poll">
                        <h3>Do you agree with this week's judge decisions on elimination?</h3>
                        <div class="input">
                            <input type="radio" name="agree_elimination" value="Yes"> Yes
                            <input type="radio" name="agree_elimination" value="No"> No
                        </div>
                    </div>
                    <div class="poll">
                        <h3>Do you want Varsha come into the show as a wildcard?</h3>
                        <div class="input">
                            <input type="radio" name="wildcard_decision" value="Yes"> Yes
                            <input type="radio" name="wildcard_decision" value="No"> No
                        </div>
                    </div>
                    <div class="poll">
                    <h3>Who do you want as a guest for next week?</h3>
                    <select name="next_week_guest">
                        <option value="Celebrity A">Celebrity A</option>
                        <option value="Celebrity B">Celebrity B</option>
                        <option value="Celebrity C">Celebrity C</option>
                    </select>
                    </div>
                    <div class="forum">
                        <h3>Forum</h3>
                    <textarea name="forum_post" rows="4" cols="50" placeholder="Share your thoughts..."></textarea>
                    </div>          
                    <input type="submit" class="button" name="submit" value="Submit">          
                </form>
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