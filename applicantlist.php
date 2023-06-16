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
    <title>applicant list</title>
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
<?php               
$conn = mysqli_connect("localhost", "root", "", "hostelmng");                   

// Check connection         
if($conn === false){           
die("ERROR: Could not connect. "                  
       . mysqli_connect_error());        
} 
$query="SELECT * FROM student";
$query_run=mysqli_query($conn,$query);
?>
    
    <table class="table table-bordered" style="background-color:white;">
        <thead class="table-dark">
            <tr>
                <th>Reg No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Contact</th>
                <th>Guardian</th>
                <th>Relationship</th>
                <th>Guardian Contact</th>
                <th>Address</th>
                <th>Email</th>
                <th>ENABLE</th>
                <!--<th>DELETE</th>!-->
            </tr>
        </thead>
        
<?php
if($query_run)
{
    while($row=mysqli_fetch_array($query_run))
    {
        ?>
        <tbody>
            <tr>
                <th><?php echo $row['StdRegNo'];?></th>
                <th><?php echo $row['Name'];?></th>
                <th><?php echo $row['Gender'];?></th>
                <th><?php echo $row['Dob'];?></th>
                <th><?php echo $row['ContactNo'];?></th>
                <th><?php echo $row['Guardian'];?></th>
                <th><?php echo $row['Relationship'];?></th>
                <th><?php echo $row['GuardianConNo'];?></th>
                <th><?php echo $row['PermanentAddr'];?></th>
                <th><?php echo $row['Email_id'];?></th>
                
        <form action="EnableStudent.php" method="post">
            <input type="hidden" name="StdRegNo" value="<?php echo $row['StdRegNo']?>">
            <th><input type="submit" name="enable" class="btn btn-success" value="ENABLE"></th>
        </form>
        
        <!--<form action="delete.php" method="post">
            <input type="hidden" name="StdRegNo" value="">
            <th><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></th>
        </form>!-->
        </tr>
        </tbody>
        <?php
    }
}
 else {
   echo "No Record Found" ;
}
?>
</table>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>
</html>
   