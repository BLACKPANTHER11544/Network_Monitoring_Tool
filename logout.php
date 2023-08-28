<?php
   session_start(); 
   session_unset(); 
   session_destroy();
   header('Location: /NMT/NMT11/login.php') ;
?>
