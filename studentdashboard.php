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
    </nav><img src="assets/img/GIFT-engineering-college-in-campus-hostel.jpg" width="1400PX">

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>

</html>
