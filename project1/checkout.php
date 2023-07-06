<?php
        $con = mysqli_connect("localhost","root","");   
         mysqli_select_db($con,"project");
        $id = $_POST['id'];
       $query2 = "SELECT * FROM cart WHERE idai = '$id'";
       $result = mysqli_query($con,$query2);
        if (mysqli_num_rows($result) > 0) {
        while ( $row= mysqli_fetch_array($result)){

                $idai = $row['idai'];
                $photo = $row['photo'];
                $description = $row['description'];
                $price = $row['price'];
                $gender = $row['gender'];
        }
        } else {
            $photo ="";
            $description = "";
            $price ="";
            $gender ="";
        }
    
?>
<html>
<head>
    <title> CheckOut </title>

    <link rel="stylesheet" href="checkout.css" />
</head>
<body>
<header>
    <h1>Welcome To dailygods ecommerce store</h1>
    <nav>
        <ul>
            <li><a href="home2.php">Home</a></li>
            <li><a href="Man.php">Man's Shoes</a></li>
            <li><a href="Woman.php">Woman's Shoes</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
</header>
    <center>

        <div class="main">
            <center>
                <form action="checkoutback.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $idai ?>">
                    <input type="hidden" name="gender" value="<?php echo $gender ?>">
                    <table style="text-align: center;" >
                    <h1> My Chart </h1>
                        <tr>
                            <td><input type="text" placeholder="First-Name" name="fname"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Last-Name" name="lname"></td>
                        </tr>
                        <tr>
                            <td> <select id="size" name="size">
                                    <option selected>---Select Shoes Size---</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> <select id="country" name="state">
                                    <option selected>---Select a State---</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td> <select id="country" name="country">
                                <option selected>---Select a City---</option>
                                <option value="surat">Surat</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Pune">Pune</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Nagpur">Nagpur</option>
                                <option value="Indore">Indore</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Patna">Patna</option>
                                <option value="Vadodara">Vadodara</option>
                                </select>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                 <textarea name="address" cols="60" rows="5"placeholder="Adderss"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Telephone" name="tele" maxlength="10"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Mobile.NO" name="mobile" maxlength="10"></td>
                        </tr>
                        <tr>
                            <td>

                                <input type="radio" name="radio" value="cod">Cash On Deliviry

                            </td>
                        </tr>

                        <tr>
                            <td>
                                Total<br>
                               <input type="text" name="price" placeholder="<?php echo $price ?>" value="<?php echo $price ?>" readonly>
                            </td>
                        </tr>
                    </table>
            </center>
            <table>

            </table><br><br>
                        <input type="submit" name="submit" value="submit & buy" />
            </form>
        </div>


        </div>
    </center>
    <footer>
      <p>&copy; 2023 dailygods</p>
    </footer>
</body>

</html>