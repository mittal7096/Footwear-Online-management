<?php

        $con = mysqli_connect("localhost","root","");
        
         mysqli_select_db($con,"project");

        $id = $_GET['id'];
        echo $id; 
       $query2 = "SELECT * FROM shop WHERE idai = '$id'";
       $result = mysqli_query($con,$query2);
        if (mysqli_num_rows($result) > 0) {
        while ( $row= mysqli_fetch_array($result)){
        
                $photo = $row['photo'];
                $description = $row['description'];
                $price = $row['price'];
                $gender=$row['gender'];
        }
        } else {
            $photo ="";
            $description = "";
            $price ="";
            $gender="";
        }

    // $result = mysqli_query($con,$query2);
    //     if (mysqli_num_rows($result) > 0) {
    //     while ( $row= mysqli_fetch_array($result)){
    //         echo $row[0];
    //     }
    //     } else {
    //         echo 'not found';
    //     }
       
        


        //  $o = implode(",",$hobbies);
        $query = "INSERT INTO cart (idai,photo,description,price,gender) VALUES('$id','$photo','$description','$price','$gender')";
           
           
        if(mysqli_query($con,$query)==true)
        {

            echo "<script>alert('added cart successfully');</script>";
        echo "data inserted succesfully";
        header("location:cart.php");
                    echo "Password updated successfully";
                    echo "<script>alert('added cart successfully');</script>";
                    
        }
        else
        {
        echo "wrong";
        }       
            // $query = "INSERT INTO  account VALUES('$email','$fname','$lname','$state','$country','$address','$tele','$mobile')"; 
            // if(mysqli_query($con,$query)==true)
            // {
            // echo "data inserted succesfully";
            // header("location:account.php");
            // }
            // else
            // {
            // echo "wrong";
            // }
        
    
    
    ?>