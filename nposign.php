<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign UP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="HeroBiz\assets\css\material-design-iconic-font.css">

    <!-- Main css -->
    <link rel="stylesheet" href="HeroBiz\assets\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
    

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
    

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="/Hackthaon/nposignback.php" method="POST" class="register-form" id="register-form">
                            <!-- <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div> -->
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"  required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"  required/>
                            </div>
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div> -->

                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <a href="/Hackthaon/nporeg.php" class="signup-image-link">New Member </a>
                        <script>
                            var password = document.getElementById("pass")
  , confirm_password = document.getElementById("re_pass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
                        </script>
                    </div>
                    <div class="signup-image">
                        <figure><img style="    max-width: 70%;
                            height: auto;
                            margin: -25px;" src="HeroBiz\assets\img\img\Untitled_design__1_-removebg-preview.png" alt="sing up image"></figure>
                   
                    </div>
                </div>
            </div> 
        </section>

        

    </div>

    <!-- JS -->
    <script src="/HeroBiz/assets/css/jquery-ui.min.js"></script>
    <script src="/HeroBiz/assets/css/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>