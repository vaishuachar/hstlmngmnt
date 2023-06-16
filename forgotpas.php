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
<center>
<?php

 require_once('conn.php');

 // Check connection
 if($con === false){ 
 die("ERROR: Could not connect. " 
 . mysqli_connect_error());
 }

 if(isset($_POST["check"])){         


 $email = $_POST['email'];

 $answer = $_POST['answer'];

     $query = "select answer,password from login where email='$email' ";
     $result = mysqli_query($con,$query);
     $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0){
            $row = mysqli_fetch_row($result);
            $answer = $row[0]; 
            $password = $row[1];
            if($answer == $answer){
                echo "<script> alert('Your password is $password');</script>";
            }
            else{
                echo "<script> alert('Wrong answer');</script>";
            }
        }

        else{
            echo "<script> alert('User does not exist');</script>"; 
        }
    }    
 // Close connection
 mysqli_close($con);
 ?>
</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title> Forgot password</title>
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
        select{
             width:40%;
            height:5%; 
            border:1px;
            border-radius:05px;
            padding:8px 15px 8px 15px;
            margin:10px 0px 15px 0px;
            box-shadow:1px 1px 2px 1px #38ACEC;
        }
    </style>
</head>
<body>

  <center>
	<form class="forgotpas.php" action="forgotpas.php" method="post">
	<p>
	<label for="email">Email-Id:</label>
<input type="text" placeholder="Enter email" name="email" id="email" required/>
<span class="error_form" id="email_error_message"></span>
</p>
	
	<p><label for="question">Security Question:</label>
<select name="question">
        <option>Select your question...</option>
        <option>What is your favorite movie?</option>
        <option>What really makes you happy?</option>
        <option>Who is your inspiration?</option>
        <option>What is your favorite destination?</option>
</select>
</p>

<p><label for="answer">Answer:</label>
<input type="text" placeholder="Enter your answer" name="answer" id="answer" required/>
<span class="error_form" id="answer_error_message"></span>
</p>

<button type="submit" name="check" class="btn btn-primary ">Check</button>
        </form>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>


      </center>
	</body>
</html>

