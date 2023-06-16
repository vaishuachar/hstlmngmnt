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
    <title> My profile</title>
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
 
<?php 
    
// Create connection 
$conn = mysqli_connect("localhost", "root", "", "hostelmng"); 
 
// Check connection 
if ($conn->connect_error) {   
  die("Connection failed: " . $conn->connect_error);          
       } 
 

$sql="select StdRegNo,Userid,Name,Gender,Dob,ContactNo,Guardian,Relationship,GuardianConNo,PermanentAddr,Email_id from student where student.Userid='{$_SESSION['User_id']}' ";
$result = $conn->query($sql) or die($conn->error); 
if(isset($_SESSION['User_id'])){
//if ($result->num_rows > 0) {        


?>   

<h1 style="font-family: 'Abhaya Libre', serif;" width="50%" border="1"><center>My Profile</center></h1> 
    <?php while($row = $result->fetch_assoc()) { ?>
      <table class="center" border="2" style="font-family: 'Abhaya Libre', serif;font-weight: bold;" width="50%" bgcolor="pink" >  
   
          <tr>
     <th><strong><font color="#000000">Student Registration No</font></strong></th>  
       <td><?php echo $row['StdRegNo']; ?></td>
          </tr>
          <tr>
     <th><strong><font color="#000000">User id</font></strong></th> 
       <td><?php echo $row['Userid']; ?></td>  
         </tr>
          <tr>
     <th><strong><font color="#000000">Name</font></strong></th> 
       <td><?php echo $row['Name']; ?></td>  
          </tr>
          <tr>
     <th><strong><font color="#000000">Gender</font></strong></th> 
       <td><?php echo $row['Gender']; ?></td>
          </tr>
          <tr>
     <th><strong><font color="#000000">Date of Birth</font></strong></th>
       <td><?php echo $row['Dob']; ?></td> 
          </tr>
          <tr>
     <th><strong><font color="#000000">Contact No</font></strong></th> 
       <td><?php echo $row['ContactNo']; ?></td>  
         </tr> 
          <tr>
     <th><strong><font color="#000000">Guardian</font></strong></th> 
       <td><?php echo $row['Guardian']; ?></td>  
         </tr> 
          <tr>
     <th><strong><font color="#000000">Relationship</font></strong></th> 
       <td><?php echo $row['Relationship']; ?></td>  
         </tr> 
          <tr>
     <th><strong><font color="#000000">Guardian contact</font></strong></th> 
       <td><?php echo $row['GuardianConNo']; ?></td>  
         </tr>
          <tr>
     <th><strong><font color="#000000">Address</font></strong></th> 
       <td><?php echo $row['PermanentAddr']; ?></td>  
         </tr>
          <tr>
     <th><strong><font color="#000000">Email</font></strong></th> 
       <td><?php echo $row['Email_id']; ?></td>  
         </tr> 
          


 <?php //while($row = $result->fetch_assoc()) { ?>    
    
 <?php }?>     

 <?php } else {    

 echo "No Data found";   

} 

$conn->close();?> 
          
    </table><br><center>
    <a href="change.php"><button type="button" class="btn btn-warning">Change Password</button></a>   
    </center>    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>    

</html> 