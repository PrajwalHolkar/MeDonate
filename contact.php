<?php
//error_reporting(0);
$servername ="localhost:3307";
$username ="root";
$password ="";
$database_name ="medonatenew";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if($conn) 
{
   // echo "Connection ok";

}
else{
    echo "connection failed";
}


    $na = $_POST['name'];
    $numb =$_POST['email'];
    $com =$_POST['subject'];
    $mess =$_POST['message'];



    $query = "INSERT INTO contact (Name,Email,Subject,Message) VALUES ('$na','$numb','$com','$mess')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data)
    {
        echo "<script> alert('Data submitted successfully');window.location='index.php'  </script>";
    }
    
    else{
        echo "<script> alert('Error');window.location='index.php'   </script>";
    }





  ?> 