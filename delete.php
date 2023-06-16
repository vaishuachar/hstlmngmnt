<!DOCTYPE html>
<html>
<head>
<title>Delete page</title>
</head>  
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "hostelmng");                   

// Check connection         
if($conn === false){           
die("ERROR: Could not connect. "                  
       . mysqli_connect_error());        
} 
if(isset($_POST['delete']))
{
    $regno=$_POST['StdRegNo'];
    $query="DELETE FROM student WHERE StdRegNo='$regno'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        echo'<script type="text/javascript">alert("Data Deleted");window.location=\'applicantlist.php\';</script>';
    }
    else {
        echo'<script>alert("Data Not Deleted");</script>';
    }
}
?>
</body>
</html>

