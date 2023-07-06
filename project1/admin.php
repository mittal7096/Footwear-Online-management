<!Doctype HTML>
	<html>
	<head>
		<title>Admin Page</title>
    <link rel="stylesheet" href="admin.css" />
</head>
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
$con = mysqli_connect("localhost","root","");        
mysqli_select_db($con,"project");
$query = "SELECT * FROM checkout";
$result =  mysqli_query($con,$query);

?>
<html>
    <body>
        <table border="1" style="width:90%;hight:10px">
            <tr>
            <th> shopid </th>
            <th> no </th>
            <th>first name</th>
            <th>last name</th>
            <th>state</th>
            <th> city </th>
            <th> address </th>
            <th>mobile</th>
            <th>payment</th>
            <th>catagoty</th>
            <th>product</th>
            <th>status</th>
            </tr>
            <?php
           while($re = mysqli_fetch_array($result))
           {    
            ?>
            <tr>
                <td> <?php echo $re['idai']?> </td>
            <td> <?php echo $re['idcheckout']?> </td>
                    <td> <?php echo $re['fname']?> </td>
                    <td> <?php echo $re['lname']?> </td>
                    <td> <?php echo $re['state']?> </td>
                    <td> <?php echo $re['country']?> </td>
                    <td> <?php echo $re['address']?> </td>
                    <td> <?php echo $re['mobile']?> </td>
                    <td> <?php echo $re['cod']?> </td>
                    <td> <?php echo $re['gender']?> </td>
                    <td><a href="adminshowproduct.php?id=<?php echo $re['idai'] ?>"> <?php  $re['idai']?>Show </a></td>
                    <td><a href="deletecheckout.php?id=<?php echo $re['idai'] ?>"> <?php  $re['idai']?>Complete </a></td>
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