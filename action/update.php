<?php
$uname = $_POST["username"];
$pas = $_POST["password"];
$rname = $_POST["fname"];
$remail = $_POST["email"];
$rlevel = $_POST["level"];
$rsize = $_POST["size"];
$rproject = $_POST["proj"];
$role = $_POST["role"];

$conn = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection Failed: %s\n". $conn -> error);
mysqli_select_db($conn,'crochet') or die("cannot select DB");
$sql = "UPDATE tester  SET username='$uname',password='$pas',role='$role',name='$rname',email='$remail',size='$rsize',level='$rlevel',project='$rproject' WHERE email='$remail'";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  die(mysqli_error($conn));
}

$result = mysqli_stmt_execute($stmt);
if ($result){
echo '<script>alert("Updated Successfully")</script>';
echo '<script>window.location="../html/user.php"</script>';
}
else{
echo '<script>alert("Error Occured. Record Not Updated!")</script>';
echo '<script>window.location="../html/user.php"</script>';
}
?>
