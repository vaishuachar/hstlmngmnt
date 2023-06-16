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
    <title>Inserting room details</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-2.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <!-- <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css"> -->
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <script src="assets/js/jquery-3.6.0.js" type="text/javascript"></script> 
    <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/jquery-captcha.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean fs-10" style="background: var(--bs-gray-400);">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
           &nbsp;&nbsp; <div class="collapse navbar-collapse" id="navcol-1">
                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="roomdesign.php">ADD ROOM</a><a class="dropdown-item" href="roomdisplay.php">ROOM DETAILS</a></div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="applicantlist.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">APPLICANT LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="allotmentdesign.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM ALLOTMENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="hostelstudents.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL STUDENTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedbackdisplay.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">VIEWFEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="register-photo" style="  background:url(./assets/img/pic10.jpeg);">
        <div class="form-container">
    <form id="Register" action="insertroom.php" method="post" style="background: var(--bs-gray-400);"><br>
        <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">
                <thead>
                    <tr>
                        <th rowspan=2""> Inserting Room Details:</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Room Number</th>
                        <th><input type="text" id="room_no" name="room_no" required/>
                        <span class="error_form" id="room_no_error_message"></span></th>
                    </tr>
                    <tr>
                        <th>Seater</th>
                        <th><select id="seater" name="seater" required="required">
                            <option value="">Select Seater...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th>Room Fees</th>
                        <th><input type="text" id="roomfee" name="roomfee" required/>
                        <span class="error_form" id="roomfee_error_message"></span></th>
                    </tr>
                    <tr>
                        <th>Students alloted</th>
                        <th><input type="text" id="std_allot" name="std_allot" required/>
                        <span class="error_form" id="std_allot_error_message"></span></th>
                    </tr>
                    
                    <tr>
                        <td><input type="reset" value="Reset" name="ResetBtn" /></td>
                        <td><input type="submit" value="Submit" name="SubmitBtn" /></td>
                    </tr>
                </tbody>
            </table>

        </form>
        </div>
    </section>
    
    
     <script type="text/javascript">

                $(function(){
                $("#room_no_error_message").hide();
                $("#roomfee_error_message").hide();
                $("#std_allot_error_message").hide();
                    
                    
                var error_room_no=false;
                var error_roomfee=false;
                var error_std_allot=false;
                    
                    
                $("#room_no").focusout(function(){
                    check_room_no();
                });
                $("#roomfee").focusout(function(){
                    check_roomfee();
                });
                $("#std_allot").focusout(function(){
                    check_std_allot();
                });
                    
                    
                     function check_room_no() {
                       var pattern = /^[0-9]*$/;
                       var room_no= $("#room_no").val();
                       if(pattern.test(room_no) && room_no !== '') {
                             $("#room_no_error_message").hide();
                             $("#room_no").css
                             ("border_bottom","2px solid #34F458")
                       } else {
                             $("#room_no_error_message").html
                             ("Should contain only digits");
                             $("#room_no_error_message").show();
                             $("#room_no").css
                             ("border-bottom","2px solid #F90A0A");
                             error_room_no=true;
                             }
                        }
                    
                    
                    function check_roomfee() {
                       var pattern = /^[0-9]*$/;
                       var roomfee= $("#roomfee").val();
                       if(pattern.test(roomfee) && roomfee !== '') {
                             $("#roomfee_error_message").hide();
                             $("#roomfee").css
                             ("border_bottom","2px solid #34F458")
                       } else {
                             $("#roomfee_error_message").html
                             ("Should contain only digits");
                             $("#roomfee_error_message").show();
                             $("#roomfee").css
                             ("border-bottom","2px solid #F90A0A");
                             error_roomfee=true;
                             }
                        }
                    
                    
                    function check_std_allot() {
                       var pattern = /^[0-9]*$/;
                       var std_allot= $("#std_allot").val();
                       if(pattern.test(std_allot) && std_allot !== '') {
                             $("#std_allot_error_message").hide();
                             $("#std_allot").css
                             ("border_bottom","2px solid #34F458")
                       } else {
                             $("#std_allot_error_message").html
                             ("Should contain only digits");
                             $("#std_allot_error_message").show();
                             $("#std_allot").css
                             ("border-bottom","2px solid #F90A0A");
                             error_std_allot=true;
                             }
                        }
                    
                    
                     $("#Register").submit(function(){
                        error_room_no = false;
                        error_roomfee=false;
                        error_std_allot = false;
                         
                         check_room_no();
                        check_roomfee();
                        check_std_allot();
                         
                         if(error_room_no === false && error_roomfee === false && error_std_allot === false)
                             
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



