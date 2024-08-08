<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
  <title>˚'*•.¸ Abba's Crochet ¸.•*'˚</title>
</head>

<body>
<?php session_start();?>
  <img src="img/logo.png" alt="business-logo" class="headPic">

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fcb8c4;">
    <div class="container-fluid">
      <div class="navbar-nav mx-auto" style=" font-size:20px;">
        <a class="nav-link active mx-2" aria-current="page" href="index.php">Home</a>
        <a class="nav-link mx-2" href="html/gallery.php">Gallery</a>
        <a class="nav-link mx-2" href="html/pattern.php">Patterns</a>
        <?php
        if(!isset($_SESSION['sess_user']))
        {
        ?>
        <a class="nav-link mx-2" href="html/tester.php">Tester Registration</a>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['sess_user']))
        {
        ?>
        <a class="nav-link mx-2" href="html/user.php">User Information</a>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['sess_type'])){
        if ($_SESSION['sess_type'][0] == "o" || $_SESSION['sess_type'][0] == "O" ){
        ?>
        <a class="nav-link mx-2" href="html/regist.php" style="font-size:20px;">Registration Information</a>
        <?php
        }
        }
        ?>
        <?php
        if(!isset($_SESSION['sess_user'])){
        ?>
        <a class="nav-link mx-2" href="html/loginForm.php">Login</a>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['sess_user'])){
        ?>
        <a class="nav-link mx-2" href="action/logout.php">Log Out</a>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>

  <!-- ======= Slider ======= -->
<center>
<div class="p-4 carosel">
  <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.png" class="d-block" alt="collage" style="height:600px; width:90%;"/>
      </div>
      <div class="carousel-item">
        <img src="img/slide4.png" class="d-block " alt="crochet blanket cream" style="height:600px; width:90%;"/>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.png" class="d-block" alt="crochet blanket blue" style="height:600px; width:90%;"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</center>
  <!-- ======= Slider ======= -->

  <!-- ======= Post Grid Section ======= -->
  <section id="posts" class="posts">
    <div style="padding:2rem;">
      <div class="row g-5">
        <div class="col-lg-4">
          <div class="post-entry-1 lg">
            <a href="html/tester.php"><img src="img/butterfly.png" alt="" class="img-fluid"></a>
            <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>July 4th '22</span></div>
            <h2 ><a href="html/tester.php" style="color:#C23777;">Upcoming Pattern Design!</a></h2>
            <p class="mb-4 d-block">Hey there everyone, I know you have all been waiting and it is finally here!<br>The December pattern has finally arrived! It is, as you can see, butterfly halter top with gradient wings. It has a options for modesty and can be modified to be backless or more coverage.<br />It's the same as always Abba Crochet is looking for new testers to try this pattern out! Just register <a href="html/tester.php" style="color:#C23777; text-decoration: underline;">here</a> or navigate to our 'Tester Sign-up' page!<br />p.s. Old testers are welcomed and encouraged to reapply to test!</p>

            <div class="d-flex align-items-center author">
              <div class="photo"><img src="img/icon.png" alt="" class="img-fluid"></div>
              <div class="name">
                <h3 class="m-0 p-0">Abba Crochet.</h3>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-8">
          <div class="row g-5">
            <div class="col-lg-4 border-start custom-border">
              <div class="post-entry-1">
                <a href="html/pattern.php"><img src="img/hat2.png" alt="" class="img-fluid"></a>
                <div class="post-meta" style="color:grey;"><span class="date">Pattern</span> <span class="mx-1">&bullet;</span> <span>August 8th '22</span></div>
                <h2><a href="html/pattern.php">New August Pattern Available; Hat Crochet Pattern</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="html/pattern.php"><img src="img/scrunch.png" alt="" class="img-fluid"></a>
                <div class="post-meta" style="color:grey;"><span class="date">Pattern</span> <span class="mx-1">&bullet;</span> <span>September 19th '22</span></div>
                <h2><a href="html/pattern.php">Easy Pattern for Beginners Available; Scrunchie Crochet Pattern</a></h2>
              </div>
            </div>
            <div class="col-lg-4 border-start custom-border">
              <div class="post-entry-1">
                <a href="html/pattern.php"><img src="img/top.png" alt="" class="img-fluid"></a>
                <div class="post-meta" style="color:grey;"><span class="date">Pattern</span> <span class="mx-1">&bullet;</span> <span>October 3rd '22</span></div>
                <h2><a href="html/pattern.php">Granny Square Heart Crochet Crop Top Pattern Available</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="html/pattern.php" style="color:grey;"><img src="img/hat.png" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Pattern</span> <span class="mx-1">&bullet;</span> <span>November 5th '22</span></div>
                <h2><a href="html/pattern.php">New November Pattern Available; Bucket Hat Crochet Pattern</a></h2>
              </div>

            </div>
            <div class="col-lg-4">

              <div class="post-entry-1 border-bottom">
                <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>July 18th '22</span></div>
                <h2 class="mb-2"><a href="html/tester.php">New Website Alert!</a></h2>
                <span class="author mb-3 d-block">Abba Crochet</span>
              </div>

              <div class="post-entry-1 border-bottom">
                <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>August 18th '22</span></div>
                <h2 class="mb-2"><a href="html/tester.php">Experienced Crochet Testers Wanted!</a></h2>
                <span class="author mb-3 d-block">Abba Crochet</span>
              </div>

              <div class="post-entry-1 border-bottom">
                <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>September 24th '22</span></div>
                <h2 class="mb-2"><a href="html/pattern.php">October Pattern Available Now!</a></h2>
                <span class="author mb-3 d-block">Abba Crochet</span>
              </div>

              <div class="post-entry-1 border-bottom">
                <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>October 12th '22</span></div>
                <h2 class="mb-2"><a href="html/pattern.php">November Pattern Available Now!</a></h2>
                <span class="author mb-3 d-block">Abba Crochet</span>
              </div>

              <div class="post-entry-1">
                <div class="post-meta" style="color:grey;"><span class="date">Patterns</span> <span class="mx-1">&bullet;</span> <span>November 26th '22</span></div>
                <h2 class="mb-2"><a href="html/tester.php">New Testers Wanted for December's Upcoming Pattern!</a></h2>
                <span class="author mb-3 d-block">Abba Crochet</span>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div> <!-- End .row -->
    </div>
  </section> <!-- End Post Grid Section -->

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

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
