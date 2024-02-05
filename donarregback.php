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
    $com =$_POST['pass'];
    $mess =$_POST['re_pass'];



    $query = "INSERT INTO donar_register (name,email,password,repassword) VALUES ('$na','$numb','$com','$mess')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data)
    {
        echo "<script> alert('Data submitted successfully');window.location='/Hackthaon/donarsign.php'  </script>";
    }
    
    else{
        echo "<script> alert('Error');window.location='/Hackthaon/donarrrrreg.php'   </script>";
    }





  ?> 