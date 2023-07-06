<!DOCTYPE html>
<?php

$con = mysqli_connect("localhost","root","");
        
mysqli_select_db($con,"project");
session_start();
// $email = $_SESSION['globalemail'];

$query2 = "SELECT * FROM shop WHERE gender='female'";

$result = mysqli_query($con,$query2);

?>

<html>
<head>
    <title>dailygods</title>
    <link rel="stylesheet" href="style.css">  
  </head>
<body>
<header>
    <h1>Welcome To Dailygods ecommerce shop</h1>
    <nav>
        <ul>
            <li><a href="home2.php">Home</a></li>
            <li><a href="Man.php">Man's Shoes</a></li>
            <li><a href="Woman.php">Woman's Shoes</a></li>
            <li><a href="contact.html">Feedback</a></li>
        </ul>
    </nav>
</header>

<main>
  <h1>Woman's Collection</h1>
    <div class="cart-container">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="cart">
                <img src="<?php echo $row['photo'] ?>" alt="Shoe Image">
                <div class="cart-under">
                    <label class="cat2"><?php echo $row['description'] ?></label><br>
                    <div class="price"><?php echo $row['price'] ?>/-</div>
                    <a href="cartback.php?id=<?php echo $row['idai'] ?>" class="cat3">Add to cart</a>
                </div>
            </div>
        <?php } ?>
    </div>
</main>
<footer>
    <p>&copy; 2023 dailygods</p>
</footer>
</body>
</html>