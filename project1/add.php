<?php
echo "filename: " . $_FILES["file"]["tmp_name"] . "<br>";
echo "image name: " . $_FILES["file"]["name"] . "<br>";
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
echo "successfully added";

if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");

    $file3 = $_FILES["file"]["name"];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO shop (photo, description, price, gender) VALUES ('$file3', '$desc', '$price', '$gender')";

    if (mysqli_query($con, $query)) {
        echo "data inserted successfully";
        header("location: admin.php");
    } else {
        echo "wrong";
    }
}

?>
