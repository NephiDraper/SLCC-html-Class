<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Core Competencies</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>N</span>ephi <span>D</span>raper</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Compentencies Section -->
  <section id="competencies">
    <div class="competencies container">
      <div>
      <h1 class="section-title">Compentencies</h1>
        <?php
          $competencies = array("Supervising Others", "Conflict Resolution", "Emotional Intelligence", "Communication Skills", "Manage Performance", "Interviewing Skills", "Team Building", "Delegation", "Change Agent", "Coaching", "Problem Solving", "Motivating Others");
          $arrlength = count($competencies);
          for($x = 0; $x < $arrlength; $x++) {
          echo $competencies[$x];
          echo "<br>";
          }
        ?>
      </div>
    </div>
  </section>
<script src="./app.js"></script>
</body>
</html>