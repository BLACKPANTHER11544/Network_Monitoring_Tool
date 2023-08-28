<?php 
 session_start() ; 
 if(!$_SESSION['auth']){
    header('Location: /NMT1/login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="nav.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-container">
      <a href="/NMT/NMT11/Home.php" class="logo">Network Analyzer </a>
      <ul class="nav-links">
        <li><a href="/NMT/NMT11/Home.php">Home</a></li>
        <li><a href="/NMT/NMT11/learn.php">Documentation</a></li>
        <li><a href="/NMT/NMT11/Analyzer.php">Network-Analyzer</a></li>
        <li><a href="/NMT/NMT11/logout.php">Logout</a></li> 
      </ul>
    </div>
  </nav>
</body>
</html>

