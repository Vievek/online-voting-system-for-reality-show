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
        <div class="abouth1">
            <h2>About Us</h2>
            <p><strong>Welcome to Legato!</strong><br>We are dedicated to providing a secure and user-friendly platform for conducting online elections and voting processes.
            Our mission is to empower individuals and organizations to participate in the democratic process with ease and confidence.</p>
        </div>     
        <div class="abouth">
            <h2>Who We Are</h2>
            <p>Legato is a team of passionate developers, designers, and voting experts committed to revolutionizing the way elections are conducted.
                With years of experience in software development and election management, our team combines technical expertise with a deep understanding of the principles of democracy to deliver innovative voting solutions.</p>
        </div>

        <div class="abouth">            
            <h2>Our Vision</h2>
            <p>At Legato, we envision a future where voting is accessible to all, regardless of geographical location or physical limitations.
                    We believe that technology has the power to democratize the voting process and increase voter participation rates around the world.
                    Our goal is to create a platform that fosters transparency, integrity, and trust in elections.</p>
        </div>

        <div class="abouth">
            <h2>What We Offer</h2>
            <ul>
                <li><strong>Experience: </strong> With years of experience in the industry, we have the knowledge and expertise to deliver high-quality voting solutions tailored to your needs.</li>
                <li><strong>Innovation:</strong> We are committed to staying at the forefront of technological advancements in the field of online voting, constantly improving and evolving our platform to meet the changing needs of our users.</li>
                <li><strong>Integrity:</strong>  We operate with the highest standards of integrity and transparency, ensuring that our platform adheres to ethical principles and legal regulations governing elections.</li>
                <li><strong>Accessibility:</strong> We believe that voting should be accessible to all, which is why we prioritize accessibility features in our platform to ensure that everyone can participate in the democratic process.</li>
            </ul>
        </div>

        <div class="abouth">
            <h2>Get in Touch</h2>
            <p>We're here to help you make your next election a success! If you have any questions about our platform or would like to learn more about our services, please don't hesitate to contact us.</p>
        </div>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>