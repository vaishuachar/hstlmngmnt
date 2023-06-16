<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'hostelmng');

if(isset($_POST['update']))
{
    $room_no=$_POST['room_no'];
    $query="UPDATE `rooms` SET seater='$_POST[seater]',roomfee='$_POST[roomfee]' where room_no='$_POST[room_no]' ";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("Room details Updated");window.location=\'roomdisplay.php\';</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Data Not Updated")</script>';
    }
}
?>
