<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>˚'*•.¸ Abba's Crochet ¸.•*'˚</title>

    <style>
.contain {
  position: relative;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  font-size: 20px;
}

.contain:hover .image {
  opacity: 0.3;
}

.contain:hover .middle {
  opacity: 1;
}
    </style>
  </head>

  <body>
    <?php session_start();?>
      <img src="../img/logo.png" alt="business-logo" class="headPic">

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fcb8c4;">
        <div class="container-fluid">
          <div class="navbar-nav mx-auto" style=" font-size:20px;">
            <a class="nav-link mx-2" aria-current="page" href="../index.php">Home</a>
            <a class="nav-link active mx-2" href="gallery.php">Gallery</a>
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
            <a class="nav-link mx-2" href="loginForm.php">Login</a>
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

<h1 style="color:#C23777; padding:2rem; padding-bottom:0;">Pattern Gallery</h1>
<p style="padding-left:2rem; padding-bottom:2rem; font-size:20px;"> Available and Future Patterns from You trying our patterns out!</p>

<!-- Gallery -->
<div class="row" style="padding:1rem; padding-top:0; margin:0;">

  <div class="col-lg-4 mb-4 mb-lg-0">
<div class="contain">
<img src=../img/top2.png class="hov w-100 shadow-1-strong rounded mb-4 image" alt="shortscrunch"/>
<div class="middle">Made By: @sarahCrochets</div>
</div>
</div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="contain">
    <img src=../img/scru.png class="hov w-100 shadow-1-strong rounded mb-4 image" alt="shortscrunch"/>
    <div class="middle">Made By: @panetrist</div>
  </div></div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="contain">
    <img src=../img/hat3.png class="hov w-100 shadow-1-strong rounded mb-4 image" alt="shortscrunch"/>
    <div class="middle">Made By: @criot</div>
  </div></div>



<p style="padding:2rem; padding-bottom:1rem; font-size:20px;"> Available and Future Patterns from Abba Crochet!</p>

  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img src="../img/top.png" class="w-100 shadow-1-strong rounded mb-4" alt="shorttop"/>
    <img src="../img/hat1.png" class="w-100 shadow-1-strong rounded mb-4" alt="longhat"/>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img src="../img/mush.png" class="w-100 shadow-1-strong rounded mb-4" alt="longmush"/>
    <img src=../img/scrunch.png class="w-100 shadow-1-strong rounded mb-4" alt="shortscrunch"/>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img src="../img/hat.png" class="w-100 shadow-1-strong rounded mb-4" alt="shorthat"/>
    <img src="../img/heart.png" class="w-100 shadow-1-strong rounded mb-4" alt="longheart"/>
  </div>
</div>
<!-- Gallery -->


<!-- footer -->
<footer class=" text-center" style="background-color:#fcb8c4; padding-top:1rem; padding-bottom:0;">
       <section class="text-center ">
         <p>Connect With Me on Social Media! &emsp;&emsp;&emsp;
         <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
         <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="fab fa-facebook"></i></a>
         <a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/" role="button"><i class="fab fa-twitter"></i></a>
         <a class="btn btn-outline-dark btn-floating m-1" href="https://tt.linkedin.com/" role="button"><i class="fab fa-linkedin"></i></a>
         <a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/" role="button"><i class="fab fa-github"></i></a>
         <br /><strong>OR</strong><br /><br />Business Email: &nbsp; acrochet@gmail.com</p>
       </section>

  <div class="text-center" style="background-color:#fcb8c4; color:black; padding-bottom:1rem; padding-top:0;">
    © 2022 Copyright: <a style="color:#C23777; text-decoration:none;">Abigail Rambarran - 87285.</a>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
