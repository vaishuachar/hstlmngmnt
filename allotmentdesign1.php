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
                <ul class="navbar-nav ms-auto" style=" >
                    <li class="nav-item"><a class="nav-link" href="applicantlist.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">APPLICANT LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">ROOM ALLOTMENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="hostelstudents.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">HOSTEL STUDENTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedbackdisplay.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">VIEWFEEDBACK</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: var(--bs-dark);font-family: 'Abhaya Libre', serif;font-weight: bold;">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="register-photo">
        <div class="form-container">
    <form id="Register" action="allotment.php" method="post" style="background: var(--bs-gray-400);"><br>
        <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;">
                <tbody>
                    <tr>
                        <th>Student Registration Number</th>
                        <?php
                        
                        $sno=$_POST["myText"];
                        $sql="select StdRegNo from student where StdRegNo='$sno'";
                        $result = $con->query($sql) or die($con->error); 
                        while($row = $result->fetch_assoc()) { 
                        $sno=$row['StdRegNo'];
                        
                        }?>
                        <th><input type="text" id="sregno" name="sregno" value="<?php echo $sno;?>" required />
                        </th>
                    </tr>
                    <tr>
                        <th>Room Number</th>
                        <?php
                        
                        $rn=$_POST["selected_text"];
                        $sql="select room_no from rooms where room_no='$rn'";
                        $result = $con->query($sql) or die($con->error); 
                        while($row = $result->fetch_assoc()) { 
                        $rn=$row['room_no'];
                        
                        }?>
                    
                        <th><input type="text" id="room_no" name="room_no" value="<?php echo $rn;?>"required />
                        </th>
                        </tr>
                        <tr>
                        <th>Seater</th>
                        <?php
                        
                        $st=$_POST["selected_text"];
                        $sql="select seater,roomfee from rooms where room_no='$st'";
                        $result = $con->query($sql) or die($con->error); 
                        while($row = $result->fetch_assoc()) { 
                        $seat=$row['seater'];
                        $fee=$row['roomfee'];
                        }?>
                        <th><input type="text" id="seater" name="seater" value="<?php echo $seat ;?>"required/>
                        </th>
                    </tr>
                    <tr>
                        <th>Room Fees</th>
                        <th><input type="text" id="roomfee" name="roomfee" value="<?php echo $fee ;?>" required/>
                            
                        </th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th><input type="date" id="date" name="date" required/>
                        </th>
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
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    </body>
</html>
