<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-2.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    
    <script src="assets/js/jquery-3.6.0.js" type="text/javascript"></script> 
    <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/jquery-captcha.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
</head>
<body>
     <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: var(--bs-gray-300);">
        <div class="container">
            <a class="navbar-brand fs-3" href="home.html" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL MANAGEMENT SYTSTEM</a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                    <a class="nav-link" href="home.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOME</a></li>
                    <li class="nav-item">
                         <a class="nav-link" href="about%20us.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ABOUT US</a></li>
                     <li class="nav-item">
                         <a class="nav-link" href="log.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGIN</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">REGISTER</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="StudentRegistrationForm.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;">STUDENT</a>
                            <a class="dropdown-item" href="WardenRegistrationForm.php" style="font-family: 'Abhaya Libre', serif;color: var(--bs-dark);">WARDEN</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="login-clean" style="  background:url(./assets/img/pic10.jpeg);">
    <div class="form-container">    
        <form id="Login" method="post" action="loginn.php" style="background: var(--bs-gray-300);">
            <h2 class="text-center">
                <strong><b>Login Form</b></strong>
            </h2>
        <div class="illustration"><i class="icon ion-ios-navigate" style="color: var(--bs-info);"></i></div>   
            
            
            <div class="mb-3">
                <label><h3>User id</h3></label>
                <input class="form-control" type="text" name="Userid" id="form_Userid" placeholder="User id" required=""/>
                <span class="error_form" id="Userid_error_message"></span>
            </div>
           
            <div class="mb-3">
             <label><h3>Password</h3></label>
             <input type="Password" placeholder="Password" name="Password" 
                    class="form-control" id="form_Password" required=""/>
            <span class="error_form" id="Password_error_message"></span>
        </div><br>
        
          <div class="mb-3">
            <button class="btn btn-primary d-block w-100" type="submit" style="color: var(--bs-gray-900);background:var(--bs-cyan); " id="Login" name="Login" value="Login">Log In</button>
            </div><br> 
    
        <div> 
            <a class="forgot" style="color: var(--bs-gray-900)" href="forgotpas.php">Forgot your password?</a> 
            </div>
        </form>
    </div>
</section>

      <script type="text/javascript">
            $(function(){
                $("#Userid_error_message").hide();
                $("#Password_error_message").hide();
                
                var error_Userid=false;
                var error_Password= false;
                
                $("#form_Userid").focusout(function(){
                    check_Userid();
                });
                $("#form_Password").focusout(function() {
                    check_Password();
         });
                function check_Userid() {
                        var pattern = /^[A-Z,a-z]*$/;
                        var Userid = $("#form_Userid").val();
                        if(pattern.test(Userid) && Userid !== '') {
                            $("#Userid_error_message").hide();
                            $("#form_Userid").css
                            ("border_bottom","2px solid #34F458")
                        } else {
                            $("#Userid_error_message").html
                            ("Should contain only charecters");
                            $("#Userid_error_message").show();
                            $("#form_Userid").css
                            ("border-bottom","2px solid #F90A0A");
                            error_Userid = true;
                        }
                }
                function check_Password() {
            var Password_length = $("#form_Password").val().length;
            if (Password_length < 5) {
               $("#Password_error_message").html
               ("Atleast 5 Characters");
               $("#Password_error_message").show();
               $("#form_Password").css
               ("border-bottom","2px solid #F90A0A");
               error_Password = true;
            } else {
               $("#Password_error_message").hide();
               $("#form_Password").css
               ("border-bottom","2px solid #34F458");
            }
         }
                
                $("#Login").submit(function(){
                        error_Userid = false;
                        error_Password = false;
                    
                        check_Userid();
                        check_Password();
                    
                    
                    if(error_Userid === false && error_Password === false) {
                           
                                return true;
                        } else {
                            alert("Please Fill the Form Correctly");
                                 return false;
                                        }
                    });
            });
        </script>
  

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
  </body>
</html>
