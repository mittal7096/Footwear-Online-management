<?php
$con = mysqli_connect("localhost", "root", "", "project");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query2 = "SELECT * FROM cart";

$result = mysqli_query($con, $query2);

// Handle remove action
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $removeQuery = "DELETE FROM cart WHERE cartidai = '$id'";
    if (mysqli_query($con, $removeQuery)) {
        $removeMessage = "Product removed successfully!";
    } else {
        $removeMessage = "Error removing product.";
    }
}
?>

<html>

<head>
    <title>Cart Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        .cart {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }

        .cart img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .cart-under {
            padding: 10px;
        }

        .cart-under .cat2 {
            font-size: 18px;
            font-weight: bold;
        }

        .cart-under .cat {
            font-size: 16px;
            color: #777;
        }

        .cart-under form {
            margin-top: 10px;
        }

        .cart-under button {
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #555;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .cart-under button:hover {
            background-color: #777;
        }

        footer {
            background-color: #ccc;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 98%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome To dailygods ecommerce store</h1>
        <nav>
            <ul>
                <li><a href="home2.php">Home</a></li>
                <li><a href="Man.php">Man's Shoes</a></li>
                <li><a href="Woman.php">Woman's Shoes</a></li>
                <li><a href="contact.html">Feedback</a></li>
            </ul>
        </nav>
    </header>
    <center>
        <div class="main">
            <br><br>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="cart">
                    <img src="<?php echo $row['photo'] ?>"><br><br>
                    <div class="cart-under">
                        <label class="cat2"><?php echo $row['description'] ?></label><br>
                        <label class="cat"><?php echo $row['price'] ?></label><br><br>
                        <form action="checkout.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['idai'] ?>">
                            <button type="submit">BUY</button>
                        </form>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['cartidai'] ?>">
                            <button type="submit" name="remove">Remove</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($removeMessage)) { ?>
                <p><?php echo $removeMessage; ?></p>
            <?php } ?>
        </div>
    </center>
    <footer>
        <p>&copy; 2023 dailygods</p>
    </footer>
</body>

</html>
