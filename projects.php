<?php
include("includes/init.php");
$projects = "highlight";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Anna Nguyen</title>

  <link rel="stylesheet" type="text/css" href="./styles/projectstyle.css" media="all" />
  <link rel="stylesheet" type="text/css" href="./styles/allstyle.css" media="all" />
</head>

<body>
  <header>
    <?php include("includes/header.php"); ?>
  </header>

  <div class="banner">
    <section>
      <h1>P R O J E C T S</h1>
    </section>
  </div>

  <h4>Status: Currently Grinding</h4>

  <div class="projects">
  <main>
    <section class="critter">
      <!-- Source: (original work) Anna Nguyen -->
      <img src="./images/critterworld.png" alt="Game application screenshot"/>
      <h2>C r i t t e r &nbsp; W o r l d</h2>
      <h3><em>Ithaca, NY</em></h3>
      <p>Created in Object-Oriented Programming and Data Structures class as a final project.
        Worked in a team of 3. A Java application that simulates a fantasy world of "critter".
        Required GUI and server-side knowledge.</p>
    </section>

    <section class="healthtech">
      <!-- Source: Sheri Go -->
      <img src="./images/dot.jpg" alt="tablet application banner"/>
      <h5>Source: <cite>Sheri Go</cite></h5>
      <h2>C o r n e l l &nbsp; H e a l t h T e c h</h2>
      <h3><em>Ithaca, NY</em></h3>
      <p>Created a tablet application to ecducate girls and women aged 15-51
        in Rajasthan, India about the menstrual cycle. Used Unity (C#), Illustrator,
        MongoDB, Node.js, and React.</p>
    </section>

    <!-- NEED TO CLEANUP
    <section class="smartcap">
      <img src="./images/critterworld.png" alt="cap designed to detect danger"/>
      <h2>SmartCap</h2>
      <h3><em>Ithaca, NY</em></h3>
      <p>In a team of 5, created SmartCap: detects danger in human's blindspots,
        especially when user's senses compromised. Goal: 360 vision. Alerts user
        ahead of time if object approaching behind at dangerous speeds. Used: Raspberry pi,
        OpenCV Computer Vision open source software/code, Python.</p>
    </section> -->

    <section class="savi">
      <!-- Source: https://www.bysavi.com/ -->
      <img src="./images/savi_logo.png" alt="startup aiming to decrease student debt"/>
      <h5><a href="https://www.bysavi.com/">Source</a>
      <h2>S a v i &nbsp; I n t e r n s h i p</h2>
      <h3><em>Washington D.C.</em></h3>
      <p>Created a Java program examining the quantifiable impact of a recently
        implemented feature before and after implementation date. Searched and translated data
        from Excel spreadsheet into visual representations, i.e. pie charts & bar graphs</p>
    </section>
  </main>

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
