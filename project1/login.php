<?php
if (isset($_REQUEST['submit'])) {
  $con = mysqli_connect("localhost", "root", "");
  mysqli_select_db($con, "project");
  $email = $_REQUEST['loemail'];
  $password = $_REQUEST['lopassword'];
  $query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($con, $query);
  // echo mysqli_num_rows($result);
  if (mysqli_num_rows($result) === 1) {
    session_start();
    $_SESSION["globalemail"] = $email;
    setcookie("globalemail2",$email);
    header("location:home2.php");
  } else {
    echo '<script>alert("worg username or password)</script>';
  }
}
?>