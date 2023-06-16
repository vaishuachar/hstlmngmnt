
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
<?php
session_start();
$con = mysqli_connect("localhost","root","","hostelmng");
$id=$_POST['id'];
$srno=$_POST['sregno'];
$name = $_POST['name'];
$date = $_POST['date'];
$rating=$_POST['ratings'];
$comments = $_POST['comments'];

if($_SESSION['User_id']==$name){
$query = "INSERT INTO tbl_feedack VALUES('$id','$srno','$name', '$date', '$rating', '$comments')";
 if (mysqli_query($con,$query)) 
 {
         
	 echo'<script type="text/javascript">confirm("Thank you for your feedback");window.location=\'studentdashboard.php\';</script>';
 }
 else
 {
     echo "Error: ".mysqli_error($con);
 }
}
else
{
    echo'<script type="text/javascript">alert("Check your Userid");window.location=\'feedbackdesign.php\';</script>';
}

mysqli_close($con);
?>
</body>
</html>


