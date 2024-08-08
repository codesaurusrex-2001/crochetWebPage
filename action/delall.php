<?php
$rname = $_POST["name"];
$remail = $_POST["email"];
$rlevel = $_POST["level"];
$rsize = $_POST["size"];
$rproject = $_POST["proj"];

$conn = mysqli_connect('localhost', 'root', '', 'crochet') or die ("Connection Failed: %s\n". $conn -> error);
mysqli_select_db($conn,'crochet') or die("cannot select DB");
$sql = "DELETE FROM register";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  die(mysqli_error($conn));
}

$result = mysqli_stmt_execute($stmt);
if ($result){
echo '<script>alert("Deleted Successfully")</script>';
echo '<script>window.location="../html/regist.php"</script>';
}
else{
echo '<script>alert("Error Occured. Form Not Modified!")</script>';
echo '<script>window.location="../html/regist.php"</script>';
}
?>
