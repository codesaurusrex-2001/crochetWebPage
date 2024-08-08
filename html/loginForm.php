<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>˚'*•.¸ Abba's Crochet ¸.•*'˚</title>
  </head>

  <body>
    <?php session_start();?>
      <img src="../img/logo.png" alt="business-logo" class="headPic">

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fcb8c4;">
        <div class="container-fluid">
          <div class="navbar-nav mx-auto" style=" font-size:20px;">
            <a class="nav-link mx-2" aria-current="page" href="../index.php">Home</a>
            <a class="nav-link mx-2" href="gallery.php">Gallery</a>
            <a class="nav-link mx-2" href="pattern.php">Patterns</a>
            <?php
            if(!isset($_SESSION['sess_user']))
            {
            ?>
            <a class="nav-link mx-2" href="tester.php">Tester Registration</a>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['sess_user']))
            {
            ?>
            <a class="nav-link mx-2" href="user.php">User Information</a>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['sess_type'])){
            if ($_SESSION['sess_type'][0] == "o" || $_SESSION['sess_type'][0] == "O" ){
            ?>
            <a class="nav-link mx-2" href="regist.php" style="font-size:20px;">Registration Information</a>
            <?php
            }
            }
            ?>
            <?php
            if(!isset($_SESSION['sess_user'])){
            ?>
            <a class="nav-link mx-2 active " href="loginForm.php">Login</a>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['sess_user'])){
            ?>
            <a class="nav-link mx-2" href="../action/logout.php">Log Out</a>
            <?php
            }
            ?>
          </div>
        </div>
      </nav>

<h1 style="color:#C23777; padding:2rem; padding-bottom:0;">Login</h1>

<!-- login -->
  <div class="container-fluid h-custom" style="padding-bottom:3rem;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../img/welc.png" class="img-fluid" alt="welcome back">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="../action/login.php" method="post" id="form">
          <div class="form-outline mb-4">
            <div class="input-field">
            <input type="text" id="user" name="user" class="form-control form-control-lg"/>
            <label class="form-label" for="user">Username</label>
            <small>Error message</small>
            </div>
          </div>

          <div class="form-outline mb-3">
            <div class="input-field">
            <input type="password" id="pass" name="pass" class="form-control form-control-lg"/>
            <label class="form-label" for="pass">Password</label>
            <small>Error message</small>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2 d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="submit" class="btn btn-primary btn-lg" style="background-color:#C23777; border-color:#C23777; width:70%;">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class=" text-center" style="background-color:#fcb8c4; padding-top:1rem; padding-bottom:0;">
    <div class="text-center ">
      <p>Connect With Me on Social Media! &emsp;&emsp;&emsp;
        <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="fab fa-facebook"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://tt.linkedin.com/" role="button"><i class="fab fa-linkedin"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/" role="button"><i class="fab fa-github"></i></a>
        <br /><strong>OR</strong><br /><br />Business Email: &nbsp; acrochet@gmail.com
      </p>
    </div>

    <div class="text-center" style="background-color:#fcb8c4; color:black; padding-bottom:1rem; padding-top:0;">
      © 2022 Copyright: <a style="color:#C23777; text-decoration:none;">Abigail Rambarran - 87285.</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../script/login.js"> </script>
</body>
</html>
