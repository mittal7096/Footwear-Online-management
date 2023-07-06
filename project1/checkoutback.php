<?php



if(isset($_POST['submit']))
    {
     
        $con = mysqli_connect("localhost","root","");
        
         mysqli_select_db($con,"project");





        session_start();
        $email = $_SESSION['globalemail'];
        
    //    $query2 = "SELECT * FROM account WHERE email = '$email'";

    // $result = mysqli_query($con,$query2);
    //     if (mysqli_num_rows($result) > 0) {
    //     while ( $row= mysqli_fetch_array($result)){
    //         echo $row[0];
    //     }
    //     } else {
    //         echo 'not found';
    //     }
       
        $gender =$_REQUEST['gender'];
        $id = $_REQUEST['id'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $size = $_REQUEST['$size'];
        $state = $_REQUEST['state'];
        $country = $_REQUEST['country'];
        $address = $_REQUEST['address'];
        $tele = $_REQUEST['tele'];
        $cod = $_REQUEST['radio'];
        $mobile = $_REQUEST['mobile'];
        $price = $_REQUEST['price'];
        $gender = $_REQUEST['gender'];



        //  $o = implode(",",$hobbies);
 

      
    

       


       
            $query = "INSERT INTO checkout(idai,fname,lname,size,state,country,address,telephone,mobile,cod,price,gender) VALUES('$id','$fname','$lname','$size','$state','$country','$address','$tele','$mobile','$cod','$price','$gender')";
           
           
            if(mysqli_query($con,$query)==true)
            {
            echo "data inserted succesfully";
            header("location:home2.php");
            }
            else
            {
            echo "wrong";
            }
        
    
    
    }

?>