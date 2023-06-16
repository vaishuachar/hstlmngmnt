<!DOCTYPE html>
<html>
    <head>
    <link href='style.css' rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
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
        <?php
            session_start();
            if(isset($_SESSION["msg"])){
                $msg = $_SESSION["msg"];
                echo "<h2><center>$msg</center></h2>";
                unset($_SESSION["msg"]);
                
            }
        ?>
        <center>
        <form method="post">
            <input type="button" value="Go back!" onclick="history.go(-1)">
        </form>
        </center>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    </body>
</html>
