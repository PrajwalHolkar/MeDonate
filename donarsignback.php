<?php

$servername ="localhost:3307";
$username ="root";
$password ="";
$database_name ="medonatenew";

$conn=mysqli_connect($servername,$username,$password,$database_name);


if(isset($_POST['email'])){
    $user=$_POST['email'];
    $pass =$_POST['pass'];

    $sql="select * from donar_register where email='".$user."'AND password='".$pass."' 
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        echo "<script> alert('You have successfully login '); window.location='/Hackthaon/HeroBiz/checkbox-04/Checkbox.html'  </script>";
      
        exit();

    }
    else{
        echo "<script> alert('You have entered incorrect Password '); window.location='/Hackthaon/donarsign.php'  </script>";
        exit();
    }

}
?>