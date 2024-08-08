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

    #results tr:hover i{
      color:white;
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
          <a class="nav-link mx-2" href="user.php">User Information</a>
          <?php
          }
          ?>
          <?php
          if(isset($_SESSION['sess_type'])){
          if ($_SESSION['sess_type'][0] == "o" || $_SESSION['sess_type'][0] == "O" ){
          ?>
          <a class="nav-link mx-2 active " href="regist.php" style="font-size:20px;">Registration Information</a>
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

  <h1 style="color:#C23777; padding:2rem;">Resgistration Applications</h1>

  <!-- return table -->
<div style="padding:2rem; overflow-x:auto !important; max-width:100%;" id="results">
  <?php
// Connection
$conn = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection failed: %s\n". $conn-> error);
 mysqli_select_db($conn, 'crochet') or die("cannot select DB");

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

//output
if (mysqli_num_rows($result) > 0) {
  echo "<table id='table'>
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Level</th>
  <th>Size</th>
  <th>Projects Tested</th>
  <th>Remove &emsp;&emsp;&emsp; <span> <a type='button' onclick='confirmDelete();'  href='../action/delall.php' style='color:#C23777;' title='Delete All'><i class='fas fa-trash-alt'></i></span></a></th>
  </tr>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<form method='post'>";
      echo "<td name='name'>" . $row['name'] . "</td>";
      echo "<input type='text' value ='". $row['email'] ."' name='email' hidden>";
      echo "<td name='email'>" . $row['email'] . "</td>";
      echo "<td name='level'>" . $row['level'] . "</td>";
      echo "<td name='size'>" . $row['size'] . "</td>";
      echo "<td name='project'>" . $row['project'] . "</td>";
      echo "<td>";
      echo '<button type= "submit" onclick="confirmDelete();" formaction="../action/rdel.php" style="color:#C23777; border:none; background-color:transparent;" class="mr-3" title="Delete Record" data-toggle="tooltip"><span> <i class="fas fa-trash-alt"></i></span></button>';
      echo"</form>";
      echo "</tr>";
  }
  echo "</table>";
}
else {
 echo "0 results";
}
$conn->close();
?>
</div>
  <!-- return table -->


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

  <script>
      var table = document.getElementById('table');
        for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
          document.getElementById("name").value = this.cells[0].innerHTML;
          document.getElementById("email").value = this.cells[1].innerHTML;
          document.getElementById("size").value = this.cells[2].innerHTML;
          document.getElementById("level").value = this.cells[3].innerHTML;
          document.getElementById("project").value = this.cells[4].innerHTML;
          alert(document.getElementById("email").value);
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

</body>

</html>
