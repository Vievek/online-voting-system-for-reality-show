<?php

@include 'config.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/aboutus.css">
</head>
<body>
     <header>
        <?php
            include 'header.php';
        ?>
    </header>
    <main>
         <h1>How to Vote</h1>

<h2>Access the Voting Page:</h2>
<p>Navigate to the "Voting" page on our website. You can find it in the main navigation menu or through a designated voting section.</p>

    <h2> View Contestant List:</h2>
    <p>On the voting page, you'll see a list of singing contestants participating in the contest. Each contestant will have their name and possibly a photo displayed.</p>

    <h2>Vote for Your Favorite Contestant:</h2>
    <p>Click on the "Vote" button next to the contestant you wish to support. This will prompt a pop-up window to appear.</p>


    <h2>Submit Your Vote:</h2>
    <p><strong>the pop-up window, you'll have the option to submit your vote or edit it before confirming.</strong> </p>
    <p>If you're satisfied with your choice, click the "Confirm" button to complete the voting process.</p>
    <p>If you need to make changes to your vote, click the "Edit" button to return to the contestant list and select a different contestant.</p>


    <h2>Confirmation:</h2>
    <p>After confirming your vote, you'll receive a confirmation message indicating that your vote has been successfully submitted.</p>

<h2>Frequently Asked Questions (FAQs):</h2>
<p><strong>Q: Can I vote for multiple contestants?</strong><br>
    A: No, each user can only vote for one contestant per voting session. </p>
<p><strong>Q: Is there a limit to how many times I can vote?</strong><br>
    A: You can vote once per voting session. one user can vote for the contestant only once time.</p>

    <h2>Additional Tips:</h2>
<ul>
    <li>Consider listening to the performances of all contestants before making your final decision.</li>
    <li>Encourage friends and family to vote for their favorite contestants as well.</li>
</ul>

<h2>Conclusion:</h2>
<p>Thank you for participating in our singing contest and for supporting our talented contestants! If you have any further questions or encounter any issues while voting, please don't hesitate to contact us for assistance.</p>

    </main>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>