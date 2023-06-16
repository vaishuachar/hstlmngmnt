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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Dashoard</title>
    <style>
        body{
            background-color: #82CAFA;
        }
        input{
            width:40%;
            height:5%; 
            border:1px;
            border-radius:05px;
            padding:8px 15px 8px 15px;
            margin:10px 0px 15px 0px;
            box-shadow:1px 1px 2px 1px #38ACEC;
        }
        label{
            width:20%;
            height:5%; 
            font-weight:bolder;
            border:1px;
            border-radius:05px;
            padding:8px 15px 8px 15px;
            margin:10px 0px 15px 0px;
            box-shadow:1px 1px 2px 1px #38ACEC;
    
}
    </style>
    <link href='style.css' rel="stylesheet" type="text/css">
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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: var(--bs-gray);">
        <div class="container"><a class="navbar-brand fs-3" href="home.html" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">STUDENT DASHBOARD</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="profile.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">MY PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link" href="allocatelist.php" style="font-family: 'Abhaya Libre', serif;color: var(--bs-dark);font-weight: bold;">MY ROOM DETAILS</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedbackdesign.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">FEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <center>
	<form class="changepassword.php" action="changepassword.php" method="post">
	<p>
	
    
    <input type="hidden" value="<?= $_SESSION["User_id"] ?>" name="uid" id="uid" required/>
        
	<p><label for="newpassword">New Password:</label>
    <input type="password" placeholder="Enter new password" name="newpassword" id="newpassword" required/>
    
    <p><label for="confirmpassword">Confirm Password:</label>
<input type="password" placeholder="Enter confirm password" name="confirmpassword" id="confirmpassword" required/>

</p><br>
         
        <button type="submit" name="change" class="btn btn-warning">Change and Submit</button>
        </form></center>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
	</body>
</html>
