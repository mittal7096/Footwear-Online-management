<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="admin.css" />
        <body>
		
		<div id="mySidenav" class="sidenav">

	  <a href="admin.php" class="icon-a">Orders</a>
	  <a href="add.html"class="icon-a">  Add-Item</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: #2F4F4F;font-weight: bold;" class="nav"  >Orders Details</span>

	</div>
	<div class="content">
</body>
</html>
        <?php
// include("p44.php");
$con = mysqli_connect("localhost","root","");
        
mysqli_select_db($con,"project");

$id = $_GET['id'];

$query = "SELECT * FROM shop WHERE idai = '$id'";


$result =  mysqli_query($con,$query);

?>
<html>
    <body>
        <table  style="width:100%;">
            <tr>
            <th>photo</th>
            <th>description</th>
            <th>price</th>
            <th>gender</th>
            <th> </th>
            </tr>
            <?php
           while($re = mysqli_fetch_array($result))
           {
            ?>
            <tr>
                    <td><img src="<?php echo $re['photo']?>" height="110px" width="150px"> </td>
                    <td> <?php echo $re['description']?> </td>
                    <td> <?php echo $re['price']?> </td>
                    <td> <?php echo $re['gender']?> </td>
                    <td> <a href="admin.php">Go Back</a></td>
             
                   
            </tr>

            <?php
            }
            ?>
        

        </table>
    </body>
</html>

    </div>
	</div>
    </div>





	</body>


	</html>