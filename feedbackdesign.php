<?php
include("conn.php");
session_start();
$login=$_SESSION['User_id'];
if($login==true)
{

}
else
{
    header('location:log.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href='style.css' rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feedback</title>
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
<body style="background-color:#38ACEC;">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: var(--bs-secondary);">
        <div class="container"><a class="navbar-brand fs-3" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">STUDENT DASHBOARD</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;" href="profile.php">MY PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;" href="allocatelist.php">MY ROOM DETAILS</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;" href="feedbackdesign.php">FEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="font-family: 'Abhaya Libre', serif;font-weight: bold;color: var(--bs-dark);">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
     <section class="register-photo">
        <div class="form-container">
     <form id="Register" method="post" action="feedback.php" style="background-color:pink;" ><br>
         <h1 style="font-family: 'Abhaya Libre', serif;" width="50%" border="1"><center>Feedback Form</center></h1>
           
             <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">
                <tbody>
                        <tr>
                        <th>Student Registration Number</th>
                        <th><input type="text" name="sregno" id="sregno" required=""/>
                        <span class="error_form" id="sregno_error_message"></span>
                        </th>
                        </tr>
                   
                        <tr>
                        <th>User id</th>
                        <th><input type="text" name="name" id="name" required=""/>
                        <span class="error_form" id="name_error_message"></span>
                        </th>
                        </tr>
                        
                        <tr>
                        <th>Date</th>
                        <th><input type="date" id="date" name="date" required=""/>
                        </th>
                        </tr>
                        
                        <tr>
                        <th>Rate your experience</th>
                        <th><select id="ratings" name="ratings" required="required">
                            <option value="">Select Rate your experienc</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                        </th>
                        </tr>
                        
                        <tr>
                        <th>Comments</th>
                            <th> <textarea name="comments" rows="2" id="comments" accept=""  cols="22" > </textarea>
                                 <span class="error_form" id="comments_error_message"></span>
                        </th>
                        </tr>
                        
                        <tr>
                        <td><input type="reset" value="Clear" name="ClearBtn" /></td>
                        <td><input type="submit" value="Submit" name="SubmitBtn" /></td>
                        </tr>
                </tbody>
            </table> 
        </form>
    </div>
</section>
    
    <script type="text/javascript">
        
         $(function(){
                $("#sregno_error_message").hide();
                $("#name_error_message").hide();
               
                var error_sregno=false;
                var error_name=false;
                
               
                $("#sregno").focusout(function(){
                    check_sregno();
                });
                $("#name").focusout(function(){
                    check_name();
                });
               
             
              function check_sregno() {
                       var pattern = /^[0-9]*$/;
                       var sregno= $("#sregno").val();
                       if(pattern.test(sregno) && sregno !== '') {
                             $("#sregno_error_message").hide();
                             $("#sregno").css
                             ("border_bottom","2px solid #34F458")
                       } else {
                             $("#sregno_error_message").html
                             ("Should contain only digits");
                             $("#sregno_error_message").show();
                             $("#sregno").css
                             ("border-bottom","2px solid #F90A0A");
                             error_sregno=true;
                             }
                        }
              
              function check_name() {
                         var pattern = /^[a-zA-Z]*$/;
                         var name = $("#name").val();
                         if(pattern.test(name) && name !== '') {
                             $("#name_error_message").hide();
                             $("#name").css
                             ("border_bottom","2px solid #34F458")
                         } else {
                             $("#name_error_message").html
                             ("Should contain only characters");
                             $("#name_error_message").show();
                             $("#name").css
                             ("border-bottom","2px solid #F90A0A");
                             error_name=true;
                        }
                }
             
             
                   $("#Register").submit(function(){
                        error_sregno = false;
                        error_name = false;
                        
                       
                        check_sregno();
                        check_name();
                        
                        
             if(error_sregno === false && error_name === false ) 
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