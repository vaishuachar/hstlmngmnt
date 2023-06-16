<!DOCTYPE html>
<html>
<head>
<title>Inserting Room Details</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","hostelmng");
if(isset($_POST['SubmitBtn'])){
    $room_no=$_POST['room_no'];
    $seater=$_POST['seater'];
    $roomfee=$_POST['roomfee'];
    $std_allot=$_POST['std_allot'];
    $sql ="SELECT room_no FROM rooms WHERE room_no='{$room_no}'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo'<script type="text/javascript">alert("Room already exist!");window.location=\'roomdesign.php\';</script>';
    } else {
        $query="INSERT INTO  rooms (room_no,seater,roomfee,std_allot)VALUES('$room_no', '$seater', '$roomfee', '$std_allot')";
        if (mysqli_query($con,$query)) 
        {
             echo'<script type="text/javascript">confirm("Room has been added");window.location=\'roomdisplay.php\';</script>';
        }
        else 
        {
             echo'<script type="text/javascript">alert("Failed to add room details");window.location=\'wardendashboard.html\';</script>';
        }
    }
}
?>
</body>
</html>