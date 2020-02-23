<?php
include("includes/init.php");
$index = "highlight";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Anna Nguyen</title>

  <link rel="stylesheet" type="text/css" href="./styles/homestyle.css" media="all" />
  <link rel="stylesheet" type="text/css" href="./styles/allstyle.css" media="all" />
</head>

<body>
  <header>
    <?php include("includes/header.php"); ?>
  </header>

  <div class="banner">
    <section>
      <h1>A N N A &nbsp;&nbsp; N G U Y E N</h1>
    </section>
  </div>

  <div class="main title">
    <section class="about">
      <h2>A b o u t</h2>
      <p>Hi everyone! I'm Anna Nguyen, an undergraduate at Cornell University majoring in computer science with a minor in Information Science. I want to specialize in software engineering. I'm also interested in Human-Computer Interaction (HCI) and UX/UI Design, particularly in the medical field! </p>
    </section>

    <section class="fun">
      <h2>F u n &nbsp; F a c t s</h2>
      <ul>
        <li>&hearts; &nbsp; &nbsp; make earrings!</li>
        <li>&hearts; &nbsp; &nbsp; coffee ice cream but lack toast and tolerant </li>
        <li>&hearts; &nbsp; &nbsp; my great grandma was sister to the last Nguyen
          Dynasty emperor of Vietnam </li>
        <li>&hearts; &nbsp; &nbsp; book: The Way I Used to Be</li>
        <li>&hearts; &nbsp; &nbsp; music artist: Jon Bellion</li>
      </ul>
    </section>

    <section class="daily">
      <h2>D a i l y</h2>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/smartcap.jpg" alt="Smart Cap">
        <figcaption>02.01.2020 : Created SmartCap @ CU Make-a-thon: a hat that detects dangerous, fast-approaching
          objects from behind the user</figcaption>
      </figure>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/gwc.jpg" alt="Girls Who Code Club Bake Sale">
        <figcaption>12.08.2018 : Fundraising for Girls Who Code @ the Holiday Bazaar!!!</figcaption>
      </figure>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/inite.jpg" alt="International Night Event">
        <figcaption>02.07.2019 : Showcased some K-pop spirit & my grandma's gorgeous ao dai @ International Night. Twas a crazy but fun night :) </figcaption>
      </figure>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/vb.jpg" alt="Volleyball team won first place!!">
        <figcaption>06.02.2018 : These volleyball superstars snatched first place in championships!!</figcaption>
      </figure>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/dance.jpeg" alt="Dance performance">
        <figcaption>06.10.2017 : Celebrating my dance performance with my little sister</figcaption>
      </figure>
      <figure>
        <!-- Source: (original work) Anna Nguyen -->
        <img src="./images/savi.jpg" alt="Internship at Savi">
        <figcaption>05.24.2019 : Snapshot of the amazing Savi team I got to shadow for a bit :)</figcaption>
      </figure>
      <figure>
        <!-- Source: Bradley -->
        <img src="./images/chai.png" alt="Joined an acapella">
        <figcaption>02.24.2020 : First rehearsal with The Chai Notes acapella group! Source: <cite> Bradley </cite></figcaption>
      </figure>
    </section>

    <section class="source">
      <!-- Source: https://www.flickr.com/photos/144034721@N02/48976459278/in/album-72157711541423971/ -->
      <cite><a href="https://www.flickr.com/photos/144034721@N02/48976459278/in/album-72157711541423971/">profile pic source</a></cite>
    </section>
  </div>

  <footer>
    <?php include("includes/footer.php"); ?>
  </footer>
</body>

</html>
