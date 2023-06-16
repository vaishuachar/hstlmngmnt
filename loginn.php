<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Userid=$_POST['Userid'];
$Password=$_POST['Password'];
$con = mysqli_connect("localhost","root","","hostelmng");
$sql = "select * from login where  Userid='".$Userid."' and Password='".$Password ."' and Accstatus=1";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$urole = $row['Role'];
echo '<script type="text/javascript">alert($urole);</script>';
  if ($records==0)
  {
    echo '<script type="text/javascript">alert("Wrong Userid or Password");window.location=\'log.php\';</script>';
  }
  else if ($urole == "w") 
  {    
     $_SESSION['User_id']=$Userid;
     echo '<script type="text/javascript">alert("Login Successfull");window.location=\'wardendashboard.php\';</script>';   
  } 
  else if ($urole == "s") 
  {    
     $_SESSION['User_id']=$Userid;
     echo '<script type="text/javascript">alert("Login Successfull");window.location=\'studentdashboard.php\';</script>';      
  } 
  else{ header("location:home.html"); }

    
?>

</body>
</html>

