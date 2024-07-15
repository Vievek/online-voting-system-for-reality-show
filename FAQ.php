<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LEGATO</title>
    <link rel="icon" href="img/header/F-removebg-preview.png">
    <link rel="stylesheet" href="css/FAQ.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <main>
    <div class="wrapper">
      <p>The Begninning of a New Asset class</p>
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          How does the online voting system work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            The online voting system allows viewers to cast their votes for their favorite contestants directly through the show's website or app. Each viewer can typically vote a certain number of times during a specified voting period.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          Is online voting secure?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Yes, our online voting system is designed with robust security measures to ensure the integrity of the voting process. We employ encryption protocols and other security features to protect against fraudulent activities.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          Can I vote multiple times?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            In most cases, viewers are allowed to vote multiple times within the designated voting window. However, there are usually limits imposed on the number of votes per person to maintain fairness and prevent abuse.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          Do I need to create an account to vote online?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            It depends on the specific voting system implemented for the reality show. Some may require viewers to create an account, while others may allow anonymous voting. Check the voting instructions for the particular show you're interested in.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          What devices can I use to vote online?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Our online voting system is typically compatible with various devices, including smartphones, tablets, laptops, and desktop computers. As long as you have an internet connection, you can participate in the voting process.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          When can I vote online?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            The voting period is usually announced during the show and may vary depending on the format and schedule. Make sure to tune in to the show or check the official website for the latest voting information.
          </p>
        </div>
      </div>
    </div>
    </main>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>
