<!DOCTYPE html>
<html>
    <head>
    <link href='style.css' rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Warden Registration Form</title>
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
    
    <script src="assets/js/jquery-3.6.0.js" type="text/javascript"></script> 
    <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/jquery-captcha.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        include_once './WardenClass.php';
        session_start();
        if(isset( $_SESSION["wardenErroMsg"])){
            $warden = unserialize($_SESSION["wardenErroMsg"]);
            $uid = $warden->getUserID();
            $uname= $warden->getUserName();
            $ucontact= $warden->getUserContactno();
            $urole=$warden->getUserRole();
            $uemail= $warden->getUserEmail();
            $errorMsg= $warden->getErrMsg();
            echo "<h3> $errorMsg </h3>";
        } else {
            $uid = "";
            $uname= "";
            $ucontact="";
            $urole="";
            $uemail="";
            $password="";
            $question="";
            $answer="";
            
        }
        ?>
        
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: var(--bs-gray-300);">
        <div class="container">
            <a class="navbar-brand fs-3" href="home.html" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL MANAGEMENT SYSTEM</a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight:bold;">HOME</a></li>
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
        
        
        
        <section class="register-photo" style="  background:url(./assets/img/pic10.jpeg);>
    <div class="form-container">
        <form id="Register" method="post" action="WardenRegistrationProcessing.php" style="background:var(--bs-gray-300);">
            <br>
             <h2 class="text-center">
                <strong>Registration Form</strong>
            </h2>
            <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">
                <thead>
                    <tr>
                        <th rowspan=2""> Please Provide Following Details</th>

                    </tr>
                </thead>
                <tbody>
                    
                     <tr>
                        <th>User ID</th>
                        <th><input type="text" name="uID" id="form_uID" accept="" value="<?=$uid?>" required=""/>
                        <span class="error_form" id="uID_error_message"></span>
                        </th>
                    </tr>
                    
                    
                     <tr>
                        <th>Name</th>
                        <th><input type="text" name="uName" id="form_uName" value="<?=$uname?>" required=""/>
                        <span class="error_form" id="uName_error_message"></span>
                        </th>
                    </tr>
                    
                    <tr>
                    <th>Contact No</th>
                    <th><input type="text" name="uContact" id="form_uContact" value="<?=$ucontact?>" required=""/>
                    <span class="error_form" id="uContact_error_message"></span>
                    </th>
                    </tr>
                    
                    <tr>
                    <th>Role</th>
                    <th><input type="text" name="uRole" id="form_uRole" accept="" value="<?=$urole?>" required=""/>
                    <span class="error_form" id="uRole_error_message"></span>
                    </th>
                    </tr>
                    
                    <tr>
                    <th>Email</th>
                    <th><input type="text" name="uEmail" id="form_uEmail" accept="" value="<?=$uemail?>" required=""/>
                    <span class="error_form" id="uEmail_error_message"></span>
                    </th>
                    </tr>
                    
                    <tr>
                    <td>Password</td>
                    <td><input type="password" name="uPas" id="form_uPass" value="" required=""/>
                    <span class="error_form" id="uPass_error_message"></span>
                    </td>
                    </tr>
                    
                    <tr>
                        <th>Security question</th>
                        <th><select id="question" name="question" required="required">
                            <option>Select your question...</option>
                            <option>What is your favorite movie?</option>
                            <option>What really makes you happy?</option>
                            <option>Who is your inspiration?</option>
                            <option>What is your favorite destination?</option>
                        </select></th>
                    </tr>
                    
                    <tr>
                    <th>Answer</th>
                    <th><input type="text" name="answer" id="answer" placeholder="Enter your answer" required=""/>
                
                    </th>
                    </tr>
                    
                    <tr>
                        <td><input type="reset" value="Reset" name="ResetBtn" /></td>
                        <td><input type="submit" value="Register" name="RegisterBtn" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>
        
        <script type="text/javascript">

             $(function(){
                $("#uID_error_message").hide();
                $("#uName_error_message").hide();
                $("#uContact_error_message").hide();
                $("#uRole_error_message").hide();
                $("#uEmail_error_message").hide();
                $("#uPass_error_message").hide();
               
                var error_uID=false;
                var error_uName=false;
                var error_uContact=false;
                var error_uRole=false;
                var error_uEmail=false;
                var error_uPass=false;
                 
                $("#form_uID").focusout(function(){
                    check_uID();
                });
                $("#form_uName").focusout(function(){
                    check_uName();
                });
                $("#form_uContact").focusout(function(){
                    check_uContact();
                });
                $("#form_uRole").focusout(function(){
                    check_uRole();
                });
                $("#form_uEmail").focusout(function(){
                    check_uEmail();
                });
                $("#form_uPass").focusout(function(){
                    check_uPass();
                });
               
                  function check_uID() {
                         var pattern = /^[a-zA-Z]*$/;
                         var uID = $("#form_uID").val();
                         if(pattern.test(uID) && uID !== '') {
                             $("#uID_error_message").hide();
                             $("#form_uID").css
                             ("border_bottom","2px solid #34F458")
                         } else {
                             $("#uID_error_message").html
                             ("Should contain only characters");
                             $("#uID_error_message").show();
                             $("#form_uID").css
                             ("border-bottom","2px solid #F90A0A");
                             error_uID=true;
                        }
                }
                 
                  function check_uName() {
                         var pattern = /^[a-zA-Z]*$/;
                         var uName = $("#form_uName").val();
                         if(pattern.test(uName) && uName !== '') {
                             $("#uName_error_message").hide();
                             $("#form_uName").css
                             ("border_bottom","2px solid #34F458")
                         } else {
                             $("#uName_error_message").html
                             ("Should contain only characters");
                             $("#uName_error_message").show();
                             $("#form_uName").css
                             ("border-bottom","2px solid #F90A0A");
                             error_uName=true;
                        }
                }
                
                 
            function check_uContact() {
                        var pattern = /^([0-9]{10})*$/;
                        var uContact= $("#form_uContact").val();
                        if(pattern.test(uContact) && uContact !== '') {
                            $("#uContact_error_message").hide();
                            $("#form_uContact").css
                            ("border_bottom","2px solid #34F458")
                        } else {
                            $("#uContact_error_message").html
                            ("Should contain 10 digits");
                            $("#uContact_error_message").show();
                            $("#form_uContact").css
                            ("border-bottom","2px solid #F90A0A");
                            error_uContact=true;
                        }
                }
                 
                
                  function check_uRole() {
                         var pattern = /^[a-zA-Z]*$/;
                         var uRole = $("#form_uRole").val();
                         if(pattern.test(uRole) && uRole !== '') {
                             $("#uRole_error_message").hide();
                             $("#form_uRole").css
                             ("border_bottom","2px solid #34F458")
                         } else {
                             $("#uRole_error_message").html
                             ("Should contain only characters");
                             $("#uRole_error_message").show();
                             $("#form_uRole").css
                             ("border-bottom","2px solid #F90A0A");
                             error_uRole=true;
                        }
                }
                  function check_uEmail() {
                        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        var uEmail = $("#form_uEmail").val();
                        if (pattern.test(uEmail) && uEmail !== '') {
                            $("#uEmail_error_message").hide();
                            $("#form_uEmail").css
                            ("border-bottom","2px solid #34F458");
                        } else {
                            $("#uEmail_error_message").html
                            ("Invalid Email");
                            $("#uEmail_error_message").show();
                            $("#form_uEmail").css
                            ("border-bottom","2px solid #F90A0A");
                            error_uEmail = true;
                        }
                }
                
                function check_uPass() {
                    var uPass_length = $("#form_uPass").val().length;
                        if (uPass_length < 5) {
                            $("#uPass_error_message").html
                            ("Atleast 5 Characters");
                            $("#uPass_error_message").show();
                            $("#form_uPass").css
                            ("border-bottom","2px solid #F90A0A");
                            error_uPass = true;
                        } else {
                            $("#uPass_error_message").hide();
                            $("#form_uPass").css
                            ("border-bottom","2px solid #34F458");
                        }
                }
                
                 
                    $("#Register").submit(function(){ 
                        error_uID=false;
                        error_uName = false;
                        error_uContact = false;
                        error_uRole=false;
                        error_uEmail = false;
                        error_uPass = false;
                       
                        check_uID();
                        check_uName();
                        check_uContact();
                        check_uRole();
                        check_uEmail();
                        check_uPass();
                       
                    if( error_uID === false && error_uName === false && error_uContact === false  && error_uRole === false &&  error_uEmail === false && error_uPass === false ) 
                         {
                                
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


