<?php
$rname = $_POST["name"];
$remail = $_POST["email"];
$rlevel = $_POST["level"];
$rsize = $_POST["size"];
$rproject = $_POST["proj"];

$conn = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection Failed: %s\n". $conn -> error);
mysqli_select_db($conn,'crochet') or die("cannot select DB");
$sql = "INSERT INTO register VALUES (?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssss",
$rname,
$remail,
$rlevel,
$rsize,
$rproject);
$result = mysqli_stmt_execute($stmt);
if ($result){
echo '<script>alert("Application Submitted Successfully!\nGood Luck!")</script>';
echo '<script>window.location="../html/tester.php"</script>';
// header("location: ../html/tester.php");
}
else{
echo '<script>alert("Error Occured. Application Not Sent!\nPlease Try Agan!")</script>';
echo '<script>window.location="../html/tester.php"</script>';
}
?>
