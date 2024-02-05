<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<style>
    #mention{
    margin: 62px 354px;
    padding: 26px;
    
}
body{
  background: #EAF6F6;
}
.navbar-brand{
        font-size: 30px;
        color:#79B4B7;
    }
    #home{
        color: black;
        font-size: 20px;
    }
    #home:hover{
        color: #79B4B7;
        font-size: 20px;
    }
</style >
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Medonate</a>

      
      <span><a id="home" href="HeroBiz\index.php">Home</a></span>
    
  </div>
</nav>
  <section>
  <h1 style="text-align: center;">Donar Form</h1>
  <form action="/Hackthaon/medicinedonarback.php" method="post" enctype="multipart/form-data" style="margin: 50px; border: 2px solid palevioletred; padding: 10px;">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Donar Name</label>
        <input type="text"  name="name" class="form-control" id="inputEmail4" placeholder="Enter Name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Mobile Number</label>
        <input type="number" name="mobile"class="form-control" id="inputPassword4" placeholder="Enter Number"required>
      </div>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Address</label>
      <input type="text"  name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"required>
    </div>
    

    
    <div class="form-group col-md-4">
      <label for="inputAddress">Pin Code</label>
      <input type="number"name="pincode" class="form-control" id="inputAddress" placeholder="pincode"required>
    </div>
    </div>

    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Medicine Name</label>
        <input type="text" name="medicine"class="form-control" id="inputCity"required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Select Category</label>
        <select id="inputState" name="category" class="form-control"required>
          <option name="category" selected>Tablet</option>
          <option>Strip</option>
          <option>Liquid</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Date of Expiry</label>
        <input type="date" name="date" class="form-control" id="inputZip"required>
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputZip">Quantity</label>
      <input type="text" name="quantity" class="form-control" id="inputZip"required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Select image</label>
      <input type="file"  name="myfile" class="form-control" id="inputZip"required>
    </div>
  </div>
  </div>
  <i class="fa-duotone fa-ballot-check"></i>

    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </section>
  
      
</body>

</html>