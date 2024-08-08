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
$sql = "INSERT INTO tester VALUES (?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssss",
$uname,
$pas,
$role,
$rname,
$remail,
$rsize,
$rlevel,
$rproject);
try {
$result = mysqli_stmt_execute($stmt);
}
catch(Exception $e) {
  // echo 'Message: ' .$e->getMessage();
}
if ($result){
echo '<script>alert("Added Successfully")</script>';
echo '<script>window.location="../html/user.php"</script>';
}
else{
echo '<script>alert("Error Occured. Record Not Added!")</script>';
echo '<script>window.location="../html/user.php"</script>';
}
?>
