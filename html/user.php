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
    #results table {
      border-collapse: collapse;
      width: 100%;
      font-size: 18px;
    }

    #results td,
    #results th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #results tr:nth-child(odd) {
      background-color: #fceded;
    }

    #results tr:hover {
      background-color: #C23777;
      color: white;
    }

    #results th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #fcd4d4;
      color: #C23777;
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
          <a class="nav-link mx-2  active" href="user.php">User Information</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <h1 style="color:#C23777; padding:2rem; padding-bottom:0">Tester Information</h1>


    <div class="card-body p-md-3">
      <div class="row justify-content-center">
      <div class="row d-flex justify-content-center align-items-center">
        <form class="col" method="post">
            <div class="row g-0">
              <div class="col-xl-6 d-xl-block">
                <div >
                <!-- return table -->
              <div style="padding:1.5rem; overflow-x:auto !important; max-width:100%;" id="results" class="tabRes">
                <?php
              // Connection
              $conn = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection failed: %s\n". $conn-> error);
               mysqli_select_db($conn, 'crochet') or die("cannot select DB");

               if(isset($_SESSION['sess_type'])){
                 $user = $_SESSION['sess_user'];
                 if ($_SESSION['sess_type'][0] == "o"){
                 $sql = "SELECT * FROM tester";
                 }
                 else {
                   $sql = "SELECT * FROM tester WHERE username='".$user."'";
                 }
               }

              $result = $conn->query($sql);

              //output
              if (mysqli_num_rows($result) > 0) {
                echo "<table id='table'>
                <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Size</th>
                <th>Level</th>
                <th>Projects Tested</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>" . $row['role'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['size'] . "</td>";
                    echo "<td>" . $row['level'] . "</td>";
                    echo "<td>" . $row['project'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";}
              else {

               echo "0 results";
              }
              $conn->close();
              ?>
              </div>
                <!-- return table -->
              </div>
              </div>

              <div class="col-xl-6">
                <div class="card-body p-md-4 text-black">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                      <?php
                        if(isset($_SESSION['sess_type'])){
                          $user = $_SESSION['sess_user'];
                          if ($_SESSION['sess_type'][0] == "o"){
                            ?>
                            <input name="username" id="username" type="text" class="form-control form-control-lg" required/>
                            <label class="form-label">Username</label>
                            <?php
                          }
                          else {
                            ?>
                            <input name="username" id="username" type="text" class="form-control form-control-lg" readonly/>
                            <label class="form-label">Username</label>
                            <?php
                          }
                        }
                      ?>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="password" class="form-control form-control-lg" name="password" required/>
                        <label class="form-label" for="form3Example1n">Password</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="fname" class="form-control form-control-lg" name="fname" required/>
                        <label class="form-label" for="form3Example1m">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="email" class="form-control form-control-lg" name="email" required/>
                        <label class="form-label" for="form3Example1n">Email</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">

                      <select class="select form-control" id="size" name="size" required>
                        <option value="1" disabled>Please select the size you'd be making</option>
                        <option value="SM">SM - Small</option>
                        <option value="MD">MD - Medium</option>
                        <option value="LG">LG - Large</option>
                        <option value="XL">XL - Extra Large</option>
                        <option value="2XL">XXL/2XL - Extra Extra Large</option>
                      </select>
                      <label class="form-label" for="size">Your Size</label>

                    </div>
                    <div class="col-md-6 mb-4">

                      <select class="select form-control" id="level" name="level" required>
                        <option value="1" disabled>Please select the level you are currently</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                      </select>
                      <label class="form-label" for="level">Your Crochet Level</label>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="proj" class="form-control form-control-lg" name="proj"/ required>
                        <label class="form-label" for="form3Example1m">Amount of Projects Tested</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="role" class="form-control form-control-lg" name="role" required/>
                        <label class="form-label" for="form3Example1n">Role</label>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center">
                    <?php
                      if(isset($_SESSION['sess_type'])){
                        $user = $_SESSION['sess_user'];
                        if ($_SESSION['sess_type'][0] == "o"){
                          ?>
                          <button method="post" formaction="../action/insert.php" style="background-color:#C23777; border-color:#C23777; width:50%;" type="submit" class="btn btn-primary btn-lg">Add</button>
                          <button method="post" onclick="confirmDelete();" formaction="../action/del.php" style="background-color:#C23777; border-color:#C23777;margin-left:5px; width:50%;" type="submit" class="btn btn-primary btn-lg">Delete</button>
                          <?php
                        }
                        else {
                          ?>
                          <button method="post" formaction="../action/insert.php" style="background-color:#C23777; border-color:#C23777; width:50%;" type="submit" class="btn btn-primary btn-lg" disabled>Add</button>
                          <button method="post" formaction="../action/del.php" style="background-color:#C23777; border-color:#C23777;margin-left:5px; width:50%;" type="submit" class="btn btn-primary btn-lg" disabled>Delete</button>
                          <?php
                        }
                      }
                    ?>
                      <button method="post" formaction="../action/update.php" style="background-color:#C23777; border-color:#C23777;margin-left:5px; width:50%;" type="submit" class="btn btn-primary btn-lg">Update</button>
                      <button style="background-color:#C23777; border-color:#C23777;margin-left:5px; width:50%;" type="reset"  class="btn btn-primary btn-lg">Clear</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<script>
    var table = document.getElementById('table');

      for (var i = 1; i < table.rows.length; i++) {
      table.rows[i].onclick = function() {
        // document.getElementsByName("username").value = this.cells[0].innerHTML;
        document.getElementById("username").value = this.cells[0].innerHTML;
        document.getElementById("password").value = this.cells[1].innerHTML;
        document.getElementById("role").value = this.cells[2].innerHTML;
        document.getElementById("fname").value = this.cells[3].innerHTML;
        document.getElementById("email").value = this.cells[4].innerHTML;
        document.getElementById("size").value = this.cells[5].innerHTML;
        document.getElementById("level").value = this.cells[6].innerHTML;
        document.getElementById("proj").value = this.cells[7].innerHTML;
        // alert(document.getElementById("test").value);
      };
  }
</script>

<script>
function confirmDelete(){
 if(!confirm("Are you sure you want to delete?")){
     event.stopPropagation();
    event.preventDefault();
 }
}
</script>

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

</body>

</html>
