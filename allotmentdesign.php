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
    <title>room allotment</title>
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
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean fs-10" style="background: var(--bs-gray-400);">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
           &nbsp;&nbsp; <div class="collapse navbar-collapse" id="navcol-1">
                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="roomdesign.php">ADD ROOM</a><a class="dropdown-item" href="roomdisplay.php">ROOM DETAILS</a></div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="applicantlist.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">APPLICANT LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM ALLOTMENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="hostelstudents.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL STUDENTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedbackdisplay.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">VIEWFEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="register-photo" style="  background:url(./assets/img/pic10.jpeg); background-size:contain;">
        <div class="form-container">
    <form id="Register" action="allotmentdesign1.php" method="post" style="background: var(--bs-gray-400);"><br>
        <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">
                <tbody>
                    <tr>
                        <th>Student Registration Number</th>
                        <th><input type="text" id="myText" name="myText" onchange="document.getElementById('myText').value" required />
                        </th>
                    </tr>
                    <tr>
                        <th>Room Number</th>
                        <th><select id="room_no" name="room_no" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
                       
                            <option value="">Select Room No</option>
                            <option value="0">101</option>
                            <option value="1">102</option>
                            <option value="2">103</option> 
                            <option value="3">104</option>
                            <option value="4">105</option>
                            <option value="5">106</option>
                            </select>
                            
                            
                            <input type="hidden" name="selected_text" id="selected_text" value="">
                            
                        </th></tr>
                    
                    <td><input type="submit" value="Display room details" name="SubmitBtn" /></td>
                    
                    <tr>
                        <td><input type="reset" value="Reset" name="ResetBtn" /></td>
                        
                    </tr>
            </tbody>
        </table>
        </form>
        </div>
    </section>
    
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    </body>
</html>



