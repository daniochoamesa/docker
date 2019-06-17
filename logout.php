<?php 
  session_start();    #Create the session as we do in all .php
  session_destroy();  #Destroy the session for logout
  header('Location: index.php');  #Go to the principal page

?>