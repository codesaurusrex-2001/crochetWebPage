<?php
 $con = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection failed: %s\n". $conn-> error);
 mysqli_select_db($con, 'crochet') or die("cannot select DB");

 $user=$_POST['user'];
 $pass=$_POST['pass'];


 $query=("SELECT * FROM tester WHERE username='".$user."' AND password='".$pass."'");
 $result=mysqli_query($con,$query);
 $numrows=mysqli_num_rows($result);


 if($numrows != 0){
   while($row=mysqli_fetch_assoc($result)){
      $dbusername=$row['username'];
      $dbpassword=$row['password'];
      $type=$row['role'];
   }
   if($user == $dbusername && $pass == $dbpassword){
      session_start();
      $_SESSION['sess_user']=$user;
      $_SESSION['sess_type']=$type;

      /* Redirect browser */
      header("Location: ../html/user.php");
      }
       else {
         // Case sensitive error out
      echo '<script>alert("Invalid username or password!")</script>';
      echo '<script>window.location="../html/loginForm.php"</script>';
      }
}
else {
  // error out if both user and pass not found
  echo '<script>alert("Invalid username or password!")</script>';
  echo '<script>window.location="../html/loginForm.php"</script>';
}
?>
