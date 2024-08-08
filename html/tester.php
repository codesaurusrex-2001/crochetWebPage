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
          <a class="nav-link mx-2" href="pattern.php">Patterns</a>
          <?php
          if(!isset($_SESSION['sess_user']))
          {
          ?>
          <a class="nav-link mx-2  active" href="tester.php">Tester Registration</a>
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

  <h1 style="color:#C23777; padding:2rem; padding-left:2rem;">Future Pattern</h1>

  <center>
    <div style="padding:2rem; padding-top:0; padding-bottom:0;">
      <div class="card mb-3" style="max-width: 80%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/butterfly.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title" style="color:#C23777;">Butterfly Top Crochet Pattern</h4>
              <br />
              <p class="card-text">Future pattern for December Testers!<br />Register and be apart of the select few to try the pattern out!<br /><br />This pattern accomodates for SM - 2XL. <br /> Level: Intermediate</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>


  <!-- sign up form -->
  <div class="col-md-12 col-lg-11">
    <div class="card-body p-md-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

          <p class=" h1 " style="color:#C23777; padding-bottom:2rem;">Sign up</p>

          <form action="../action/register.php" method="post" class="mx-1 mx-md-4" id="form" >
            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <div class="input-field">
                  <input type="text" id="fname" class="form-control" name="name"/>
                  <label class="form-label" for="fname">Your Name</label>
                  <small>Error message</small>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <div class="input-field">
                <input type="email" id="email" class="form-control" name="email" />
                <label class="form-label" for="email">Your Email</label>
                <small>Error message</small>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-signal fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <div class="input-field">
                <select class="select form-control" id="level" name="level">
                  <option value="1" disabled>Please select the level you are currently</option>
                  <option value="Beginner">Beginner</option>
                  <option value="Intermediate">Intermediate</option>
                  <option value="Expert">Expert</option>
                </select>
                <label class="form-label" for="level">Your Crochet Level</label>
                <small>Error message</small>
              </div>
            </div>
          </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-tshirt fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <div class="input-field">
                <select class="select form-control" id="size" name="size">
                  <option value="1" disabled>Please select the size you'd be making</option>
                  <option value="SM">SM - Small</option>
                  <option value="MD">MD - Medium</option>
                  <option value="LG">LG - Large</option>
                  <option value="XL">XL - Extra Large</option>
                  <option value="2XL">XXL/2XL - Extra Extra Large</option>
                </select>
                <label class="form-label" for="size">Your Size</label>
                <small>Error message</small>
              </div>
            </div>
          </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-folder fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <div class="input-field">
                <input type="text" id="proj" class="form-control" name="proj" />
                <label class="form-label" for="proj">How many projects have you tested?</label>
                <small>Error message</small>
              </div>
            </div>
          </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <button style="background-color:#C23777; border-color:#C23777; width:50%;" type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>

          </form>
        </div>

          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
            <img src="../img/sideimg.png" class="img-fluid" style="width:100%" alt="Sample image">
          </div>

      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class=" text-center" style="background-color:#fcb8c4; padding-top:1rem; padding-bottom:0;">
    <section class="text-center ">
      <p>Connect With Me on Social Media! &emsp;&emsp;&emsp;
        <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="fab fa-facebook"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://tt.linkedin.com/" role="button"><i class="fab fa-linkedin"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/" role="button"><i class="fab fa-github"></i></a>
        <br /><strong>OR</strong><br /><br />Business Email: &nbsp; acrochet@gmail.com
      </p>
    </section>

    <div class="text-center" style="background-color:#fcb8c4; color:black; padding-bottom:1rem; padding-top:0;">
      © 2022 Copyright: <a style="color:#C23777; text-decoration:none;">Abigail Rambarran - 87285.</a>
    </div>
  </footer>

<script src="../script/valid.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
