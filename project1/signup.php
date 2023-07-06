<?php
if(isset($_REQUEST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "project");

    if (!$con) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($con, $_REQUEST['siname']);
    $email = mysqli_real_escape_string($con, $_REQUEST['siemail']);
    $password = mysqli_real_escape_string($con, $_REQUEST['sipassword']);

    // Check if email already exists in the database
    $checkQuery = "SELECT * FROM register WHERE email = '$email'";
    $checkResult = mysqli_query($con, $checkQuery);

    if(mysqli_num_rows($checkResult) > 0) {
        echo "Email already exists";
    } else {
        $query = "INSERT INTO register (name, Email, password) VALUES ('$username', '$email', '$password')";

        if(mysqli_query($con, $query)) {
            header("location: login.html");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>
