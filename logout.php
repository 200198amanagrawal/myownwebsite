<?php
session_start();
?><?php 
    session_unset();
    session_destroy();
    header("Location: ./website.php");
  exit();
 ?>