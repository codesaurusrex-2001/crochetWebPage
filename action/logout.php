<?php
  session_start();
  unset($_SESSION['sess_user']);
  unset($_SESSION['sess_type']);
  session_destroy();
  header("location:../index.php");   
  ?>
