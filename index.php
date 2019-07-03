<?php

if($_POST["submit"]) {
    $recipient="jamilaleilanikeba@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>The Conference 2019</title>
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Monoton|Muli:300,400,500&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jQuery-3.3.1.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <header class="mainHeader">
    <div class="headerTitle">
      <h1>The Conference</h1>
      <h3>September 21, 2019</h3>
    </div>
  </header>
  <main>
    <section class="section" id="section1">
      <h2 id="scheduleTitle">SCHEDULE</h2>
      <p id="schedule">
        12pm-12:30pm: Arrival and Check-in </br>
        12:30pm-1pm: Mingle</br>
        1pm: Speaker 1</br>
        2pm: Speaker 2</br>
        2:30pm: Breakout Session 1</br>
        3pm: Speaker 3</br>
        3:30pm: Speaker 4</br>
        4pm: Breakout Session 2</br>
        5pm: Key-Note Speaker
      </p>
    </section>
    <section class="section" id="section2">
      <div id="registerTitle">
        <h2>REGISTER</h2>
      </div>
      <div id="registerForm">
        <!-- <?=$thankYou ?> -->
        <form method="post" action="index.php">
          <input class="formText" type="text" name="name1" placeholder="first name"/>
          <input class="formText" type="text" name="name2" placeholder="last name"/>
          <input class="formText" type="text" name="email" placeholder="email"/>
          <div class="formCheckboxDiv">
            <div>I'm interested in presenting</div>
            <input class="formCheckbox" type="checkbox" name="presenting"/>
          </div>
          <input class="formText" type="submit" name="sumbit" placeholder="submit"/>
        </form>
      </div>
      <?=$thankYou ?>

     <form method="post" action="index.php">
         <label>Name:</label>
         <input name="sender">

         <label>Email address:</label>
         <input name="senderEmail">

         <label>Message:</label>
         <textarea rows="5" cols="20" name="message"></textarea>

         <input type="submit" name="submit">
     </form>
    </section>
    <section class="section" id="section3">
      <div>
        Fill your brain and inspire your heart.
      </div>
    </section>
    <section class="section" id="section4">
      <div id="connectContent">
        <div id="connectText">
          <p>Join the mailing list and we’ll share the latest updates, including speaker and breakout session announcements.</p>
        </div>
        <div id="connectForm">
          <form>
            <input class="formText" type="text" name="email" placeholder="email"/>
          </form>
        </div>
      </div>
      <div id="connectTitle">
        <h2>CONNECT</h2>
      </div>
    </section>
    <section id="section5">
      <div id="quote">“The Conference is the best conference that’s never happened before.”</div>
    </section>
    <section id="section6">
      <p>Sponsor The Conference,</br> SF's most disruptive</br>up-and-coming</br>event this year.</p>
      <div id="sponsorContent">
        <div id="sponsorForm">
          <form>
            <input id="sponsorForm1" class="formText" type="text" name="name1" placeholder="first name"/>
            <input id="sponsorForm2" class="formText" type="text" name="name2" placeholder="last name"/>
            <input id="sponsorForm3" class="formText" type="text" name="email" placeholder="email"/>
          </form>
        </div>
        <h2 id="sponsorTitle">BECOME A SPONSOR</h2>
      </div>
    </section>
    <section id="section7">
      <div id="goldenrodLogo"></div>
      <div id="faqContact">
        <div>FAQ</div>
        <div>Contact</div>
      </div>
      <div id="hashtag">#goldenrodConference2019</div>
    </section>
  </main>
</body>
</html>
