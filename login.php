<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
  <div class="login-container">
    <h1>NMT Login</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
<?php 
$db_server= "localhost" ; 
$db_root= "nmtiit" ; 
$db_pass= "password" ; 
$db_name= "NMT11" ; 
$conn = "" ; 
$username = $_POST['username']; 
$passcode = $_POST['password']; 
 
try{
 $conn = mysqli_connect($db_server,$db_root,$db_pass,$db_name);
 $query ="select * from users11 where name='{$username}' and password='{$passcode}'" ;
 $result = mysqli_query($conn,$query); 
   if(mysqli_num_rows($result)>0){
     session_start() ; 
     $_SESSION['auth']='true' ;
     header('Location:/NMT/NMT11/Home.php');
   }else{
     echo 'Invalid Credentials';
   }
 }
catch(mysqli_sql_exception){
  echo "Enable to connect to Mysql server" ;
 }
?> 
