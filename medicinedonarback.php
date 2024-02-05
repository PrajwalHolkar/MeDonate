<?php
error_reporting(0);
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


    $name = $_POST['name'];
    $number =$_POST['mobile'];
    $add =$_POST['address'];
    $add1 =$_POST['pincode'];
    $pin =$_POST['medicine'];
    $med =$_POST['category'];
    $date =$_POST['date'];
    $cat =$_POST['quantity'];
    $files= $_FILES['myfile']['tmp_name'];
   
   


    $query = "INSERT INTO medicine_donar (donar_name,mobile,address,pincode,medicine_name,category,expiry,quantity,image) VALUES ('$name','$number','$add','$add1','$pin','$med','$date','$cat','$files')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data){
     echo "<script> alert('Data submitted successfully');window.location='/Hackthaon/DONARform.php'  </script>";
    }
    
    else{
        echo "<script> alert('Error');window.location='/Hackthaon/DONARform.php'   </script>";
    }





  ?>
