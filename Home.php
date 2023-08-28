<?php 
 session_start() ; 
 if(!$_SESSION['auth']){
   header('Location: /NMT/NMT11/login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network Monitoring Tool</title>
  <link rel="stylesheet" href="Homestyle.css">
</head>
<body>
  <?php
  include("nav.php"); 
  ?>
  <header class="hero">
    <div class="hero-content">
      <h1>Network Monitoring Tool</h1>
      <p>Monitor your network with ease and efficiency.</p>
      <a href="/NMT/NMT11/learn.php" class="cta-button">Learn More</a>
    </div>
  </header>

  <section class="features" id="features">
    <h2>Features</h2>
    <ul>
      <li>Real-time monitoring of network </li>
      <li>Capture Interface specific traffic</li>
      <li>Detailed View for data packets </li>
      <li>Protocol based capturing</li>
      <li>Count specific capture</li>
    </ul>
  </section>

  <section class="cta">
    <h2>Ready to Get Started?</h2>
    <p>Click Nertwork Analyzer and start monitoring your network!</p>
    <a href="/NMT/NMT11/Analyzer.php" class="cta-button">Network Analyzer</a>
  </section>
  <?php 
  include("footer.php");
  ?>
</body>
</html>

