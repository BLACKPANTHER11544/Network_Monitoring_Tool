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
  <title>Styled Input Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
     
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      background-color: #ffffff;
      border-radius: 5px;
      padding: 20px;
      
      justify-content: center; 
      align-items: center ;
      margin : auto ;
      height : 74vh;
      max-width: 400px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input,
    textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 15px;
    }

    button {
      padding: 10px;
      background-color: #007bff;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      margin-top :15px
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<?php
include("nav.php"); 
?>
<body>
  <div class="form-container">
    <h1>Network Analyzer</h1>
  
    <form action="/NMT/NMT11/newfile.php" method="post">
      <label for="interface">Interface:</label>
      <select id="interface" name="interface">
        <option value="Ethernet">Ethernet</option>
     </select>

      <label for="protocol">Protocol:</label>
      <select id="protocol" name="protocol">
        <option value="udp">UDP</option>
        <option value="ip">IP</option>
        <option value="arp">ARP</option>
     </select>
     
     <label for="ipv">IP Version:</label> 
     <select id="ipv" name="ipv"> 
         <option value="ipv4">IPV4</option> 
     </select>
     
     <label for="property">Select Property:</label>
        <select name="property" id="property">
            <option value="all">All Properties</option>
            <option value="timestamp">Timestamp</option>
            <option value="sourcemac">Source MAC</option>
            <option value="destinationmac">Destination MAC</option>
            <option value="sourceip">Source IP</option>
            <option value="destinationip">Destination IP</option>
            <option value="packet_length">Packet Length</option>
        </select>

    
      <button type="submit" id="button">Submit</button>
    </form>
  </div>
</body>
</html>
<?php
include("footer.php") ;
?>

