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
  </head>

  <body>
    <?php session_start();?>
      <img src="../img/logo.png" alt="business-logo" class="headPic">

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fcb8c4;">
        <div class="container-fluid">
          <div class="navbar-nav mx-auto" style=" font-size:20px;">
            <a class="nav-link mx-2" aria-current="page" href="../index.php">Home</a>
            <a class="nav-link mx-2" href="gallery.php">Gallery</a>
            <a class="nav-link mx-2  active " href="pattern.php">Patterns</a>
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


    <?php
    if(isset($_SESSION['sess_user'])){
    ?>
    <h1 style="color:#C23777; padding:2rem; padding-left:2rem;">Beta-Testing Pattern</h1>

    <center>
      <div style="padding:2rem; padding-top:0;">
          <div class="card mb-3" style="max-width: 90%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/butterfly.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="../dwn/pattern2.pdf" style="color:#C23777;" class="text-decoration-none" download><h4 class="card-title">Butterfly Top Crochet Pattern</h4></a>
                <p class="card-text">Future pattern for December Testers!<br />Congratulations on being apart of the select few to try the pattern out!<br /><br />This pattern accomodates for SM - 2XL. <br /> Level: Intermediate
                <br /><br /><a href="../dwn/pattern2.docx" style="color:#C23777;" class="text-decoration-none" download>Click Here</a> or the Title to begin your download!</p>
                <p class="card-text"><small class="text-muted">Last updated 1 month ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
    <?php
    }
    ?>

<h1 style="color:#C23777; padding:2rem;">Available Patterns</h1>

<center>
<div style="padding:2rem; padding-top:0;">
    <div class="card mb-3" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/hat.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body text-start">
          <a href="../dwn/pattern1.pdf" style="color:#C23777;" class="text-decoration-none" download><h4 class="card-title">Bucket Hat Crochet Pattern</h4></a>
          <p class="card-text">This pattern accomodates up to the head circumference of 64cm, accounting for SM - 2XL. <br /> Level: Beginner
          <br />If you need this pattern adjusted to be bigger or smaller navigate to the 'To measure' section of this page where you can see my contact information, general guidelines and rates!
          <br /><br /><a href="" style="color:#C23777;" class="text-decoration-none">Click Here</a> or the Title to begin your download!</p>
          <p class="card-text"><small class="text-muted">Last updated 1 month ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding:2rem; padding-top:0;">
    <div class="card mb-3" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/top.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body text-start">
          <a href="../dwn/pattern2.docx" style="color:#C23777;" class="text-decoration-none" download><h4 class="card-title">Heart Granny Square Crop Top Crochet Pattern</h4></a>
          <p class="card-text">This pattern accomodates for SM - 2XL.<br /> Level: Intermediate
          <br />If you need this pattern adjusted to be bigger or smaller navigate to the 'To measure' section of this page where you can see my contact information, general guidelines and rates!
          <br /><br /><a href="" style="color:#C23777;" class="text-decoration-none">Click Here</a> or the Title to begin your download!</p>
          <p class="card-text"><small class="text-muted">Last updated 2 months ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding:2rem; padding-top:0;">
    <div class="card mb-3" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/hat2.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body text-start">
          <a href="../dwn/pattern2.docx" style="color:#C23777;" class="text-decoration-none" download><h4 class="card-title">Hat Crochet Pattern</h4></a>
          <p class="card-text">This pattern accomodates up to the head circumference of 64cm, accounting for SM - 2XL. <br /> Level: Beginner
          <br />If you need this pattern adjusted to be bigger or smaller navigate to the 'To measure' section of this page where you can see my contact information, general guidelines and rates!
          <br /><br /><a href="" style="color:#C23777;" class="text-decoration-none">Click Here</a> or the Title to begin your download!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 month ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding:2rem; padding-top:0;">
    <div class="card mb-3" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/scrunch.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body text-start">
          <a href="../dwn/pattern2.docx" style="color:#C23777;" class="text-decoration-none" download><h4 class="card-title">Scrunchie Crochet Pattern</h4></a>
          <p class="card-text">This pattern is a one-size-fits-most as it is a hair tie. Along with yarn, this pattern also uses a hair tie! <br /> Level: Beginner
          <br />If you need this pattern adjusted to be bigger or smaller navigate to the 'To measure' section of this page where you can see my contact information, general guidelines and rates!
          <br /><br /><a href="" style="color:#C23777;" class="text-decoration-none">Click Here</a> or the Title to begin your download!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
</center>

<h1 style="color:#C23777; padding:2rem;">To Measure Service</h1>

<p style="padding:2rem; padding-top:0;"> The 'To Measure Service' is an interactive, made-to-measure pattern that calculates the number of stitches, rows, and yardage for an available pattern. <br />The benefit of the to measure pattern is that it makes your pattern size inclusive to virtually any body size or age! This is done by allowing the user to type in their body's measurements and altering the pattern accordingly. <br /><br /> If you'd be interested in me converting/making a to Measure pattern for you, feel free to reach out to me on any of the contact information below!<br /><br />My Rate: $20.00/hour.​ <br /><br /> For all inquiries please contact me through the references at the bottom of the website!
</p>


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
