<!DOCTYPE html>
<html>
<head>
<title>Allotment</title>
</head>
<body>
<?php
require_once 'conn.php';
if(isset($_POST['SubmitBtn'])){
    $allotno=$_POST['allot_no'];
    $sregno=$_POST['sregno'];
    $room_no=$_POST['room_no'];
    $seater=$_POST['seater'];
    $roomfee=$_POST['roomfee'];
    $date=$_POST['date'];
    //$std_allot=$_POST['std_allot'];
    $sql ="SELECT std_allot FROM rooms WHERE room_no='{$room_no}'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    //if(mysqli_num_rows($result)>0){
    $sa= $row["std_allot"] ;
    
    
    
    if($sa<$seater)
    {
        
        $sa+=1;
      //  $qry1 = "INSERT INTO tbl_allot(allot_no,sregno,sname,room_no,seater,roomfee,date) VALUES('$allotno','$sregno','$sname','$room_no','$seater','$roomfee','$date')";
        
       $qry1 = "INSERT INTO `tbl_allot`(`allot_no`, `sregno`, `room_no`, `seater`, `roomfee`, `date`) VALUES ('$allotno','$sregno','$room_no','$seater','$roomfee','$date')";
         mysqli_query($con,$qry1);
//        mysqli_close($con);
        
       
        $qry2 = "UPDATE rooms SET std_allot = $sa WHERE  room_no ='{$room_no}'";
          mysqli_query($con,$qry2);
        
           echo'<script type="text/javascript">confirm("Requested student has  been alloted");window.location=\'hostelstudents.php\';</script>';
        mysqli_close($con);
            
        
    }
    
    else
    {
        
          echo'<script type="text/javascript">alert("Room already full!");window.location=\'allotmentdesign.php\';</script>';
    }
}
?>
</body>
</html>