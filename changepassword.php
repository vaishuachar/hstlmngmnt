<!DOCTYPE html>
<html>
<head>
 <title>Search Page</title>
</head>

<body>
 <center>
 <?php
 
 require_once('conn.php');
 session_start();
 // Check connection
 if($con === false){ 
 die("ERROR: Could not connect. " 
 . mysqli_connect_error());
 }
 
 if(isset($_POST["change"])){         
  
 $newpas = $_POST['newpassword'];
 $conpas = $_POST['confirmpassword'];
            
            if ($newpas != $conpas){
                echo '<script type="text/javascript">alert("Password not matching!");window.location=\'change.php\';</script>'; 
            }
            else{
                $query = "UPDATE login SET Password = '$newpas' WHERE Userid='{$_SESSION['User_id']}' ";
                $result = mysqli_query($con,$query);
                echo '<script type="text/javascript">alert(" Successfully updated");window.location=\'profile.php\';</script>'; 
            }
        
     }
 
 // Close connection
 mysqli_close($con);
 ?>
    </center>
</body>
</html>
