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
  <link rel="stylesheet" href="footerstyle.css">
</head>
<body>
  <footer>
    <p>&copy; 2023 NMT. All rights reserved.</p>
  </footer>
</body>
</html>

