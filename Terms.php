<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet"  href="css/Terms.css">
    <script src="Terms.js" defer></script>
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
    <div class="term-container">
        <h1 class="termh">Terms and Conditions</h1>
        <div class="term-para">
            <p class="terms">
                <b>Eligibility and Participation:</b> Participants must be legal residents of the country where the reality show is being conducted and must meet any additional eligibility criteria set forth by the producers. Minors may require parental consent to participate. Contestants must be in good physical and mental health and able to fully participate in all aspects of the show. Employees of the production company, sponsors, and their immediate family members are typically ineligible to participate. By entering the competition, participants agree to abide by all rules, decisions, and instructions of the producers and their designated representatives. Contestants must provide accurate and truthful information during the application process and throughout their participation in the show. Failure to meet eligibility requirements or comply with the terms and conditions may result in disqualification from the competition.

            </p>
            <p class="terms">
                <b>Code of Conduct and Responsibilities:</b> Participants must adhere to a code of conduct throughout the show, including refraining from violence, harassment, or any behavior deemed inappropriate by the producers. Contestants must treat fellow participants, crew members, and staff with respect and professionalism at all times. Any form of cheating, manipulation, or dishonesty will not be tolerated and may result in immediate disqualification. Contestants must agree to participate in all required activities and challenges during the course of the show and follow all safety guidelines and instructions provided by the production team. By participating in the reality show, contestants grant the producers the right to use their name, likeness, voice, and any footage or recordings of their participation in the show for promotional purposes. Contestants also acknowledge that participation in the reality show involves inherent risks and agree to release the producers, sponsors, and affiliated parties from any liability for injuries, damages, or losses incurred during the course of the competition.
Website Usage: Users of the reality show website agree to comply with all applicable laws and regulations and to use the website only for lawful purposes. Users must not engage in any activities that may disrupt or interfere with the functioning of the website or the experience of other users. The website may contain links to third-party websites or content, which are provided for convenience only. The reality show producers do not endorse or control any third-party content and are not responsible for its accuracy, legality, or availability. Users are solely responsible for their interactions with third-party websites and agree to review and comply with the terms and conditions and privacy policies of any third-party websites they visit. The reality show producers reserve the right to modify, suspend, or terminate access to the website at any time for any reason, without prior notice or liability. Users are encouraged to review the terms and conditions of the website regularly for updates or changes.
        </div>
        <div class="termbtn">
            <button id="toggleButton">Toggle Terms</button>
            <button id="acceptButton">Accept Terms</button>
            <button id="declineButton">Decline Terms</button>
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
