<?php
@include 'config.php';

session_start();

$last_inserted_id = null;

if(isset($_SESSION['last_inserted_id'])){
    $last_inserted_id = $_SESSION['last_inserted_id'];
} 

    $sql = "SELECT *from user_interaction where id = '$last_inserted_id'";
    $result = mysqli_query($conn, $sql);

    // Check if query executed successfully
    if ($result) {
        // Fetch data
        if ($row = mysqli_fetch_assoc($result)) {
            $enjoyment_level = $row['enjoyment_level'];
            $agree_elimination = $row['agree_elimination'];
            $wildcard_decision = $row['wildcard_decision'];
            $next_week_guest = $row['next_week_guest'];
            $forum_post = $row['forum_post'];
        } else {
            echo "No data found for ID: $last_inserted_id";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    
} 

if(isset($_POST['submit'])){
        $enjoyment_level = $_POST['enjoyment_level'];
        $agree_elimination = $_POST['agree_elimination'];
        $wildcard_decision = $_POST['wildcard_decision'];
        $next_week_guest = $_POST['next_week_guest'];
        $forum_post = $_POST['forum_post'];


      $sql = "UPDATE user_interaction 
        SET enjoyment_level = '$enjoyment_level', 
            agree_elimination = '$agree_elimination', 
            wildcard_decision = '$wildcard_decision', 
            next_week_guest = '$next_week_guest', 
            forum_post = '$forum_post' 
        WHERE id = '$last_inserted_id'";


       if(mysqli_query($conn,$sql)){
            echo '<script>location.replace("user_profile_page.php")</script>';
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
        <div class="userinteddefault">
          <h1>Thank you for your interaction!</h1>
          <button id="editButton" class="button">Edit Response</button>
        </div>
        <div id="popupContainer" class="popup" style="display: none;">
            <div class="userinteractioncon">
                <h2>Polls</h2>           
                <div class="userinteractionform">
                    <form action="user_interaction_edit.php" method="post">
                        <div class="poll">
                        <h3>How much did you enjoy this week's episode?</h3>
                        <div class="input">
                            <input type="radio" name="enjoyment_level" value="1" <?php echo ($enjoyment_level == '1') ? 'checked' : ''; ?>> 1
                            <input type="radio" name="enjoyment_level" value="2" <?php echo ($enjoyment_level == '2') ? 'checked' : ''; ?>> 2
                            <input type="radio" name="enjoyment_level" value="3" <?php echo ($enjoyment_level == '3') ? 'checked' : ''; ?>> 3
                        </div>                    
                        </div>
                        <div class="poll">
                            <h3>Do you agree with this week's judge decisions on elimination?</h3>
                            <div class="input">
                                <input type="radio" name="agree_elimination" value="Yes" <?php echo ($agree_elimination == 'Yes') ? 'checked' : ''; ?>> Yes
                                <input type="radio" name="agree_elimination" value="No" <?php echo ($agree_elimination == 'No') ? 'checked' : ''; ?>> No
                            </div>
                        </div>
                        <div class="poll">
                            <h3>Do you want <contestant> to come into the show as a wildcard?</h3>
                            <div class="input">
                                <input type="radio" name="wildcard_decision" value="Yes" <?php echo ($wildcard_decision == 'Yes') ? 'checked' : ''; ?>> Yes
                                <input type="radio" name="wildcard_decision" value="No" <?php echo ($wildcard_decision == 'No') ? 'checked' : ''; ?>> No
                            </div>
                        </div>
                        <div class="poll">
                            <h3>Who do you want as a guest for next week?</h3>
                            <select name="next_week_guest">
                                <option value="Celebrity A" <?php echo ($next_week_guest == 'Celebrity A') ? 'selected' : ''; ?>>Celebrity A</option>
                                <option value="Celebrity B" <?php echo ($next_week_guest == 'Celebrity B') ? 'selected' : ''; ?>>Celebrity B</option>
                                <option value="Celebrity C" <?php echo ($next_week_guest == 'Celebrity C') ? 'selected' : ''; ?>>Celebrity C</option>
                            </select>
                        </div>
                        <div class="forum">
                            <h3>Forum</h3>
                        <textarea name="forum_post" rows="4" cols="50" placeholder="Share your thoughts..."><?php echo $forum_post; ?></textarea>
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
    <script src="user_interaction_edit.js"></script>
</body>
</html>