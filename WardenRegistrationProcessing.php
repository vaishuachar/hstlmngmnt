<?php
include_once './WardenClass.php';
session_start();
if(isset($_POST["RegisterBtn"])){
   
    $db = new mysqli("localhost", "root", "", "hostelmng");
    if($db->connect_errno){
        echo "Failed to connect to database : ".$db->connect_error;
    }else{
        $disableRecord = 0;
        // Please Sanitize the inputs
        $uid = $_POST["uID"];
        $uname = $_POST["uName"];
        $ucontact = $_POST["uContact"];
        $urole=$_POST["uRole"];
        $uemail =  $_POST["uEmail"];     
        $password = $_POST["uPas"];
        $question=$_POST["question"];
        $answer=$_POST["answer"];
        
        $rs = $db->query("SELECT count(*) from login");
        $row = $rs->fetch_array();
        if($row[0] == 0){
            // First administrator, hence do not disable the user
            $disableRecord = 1;
        } 
        
         $rs = $db->query("SELECT count(*) from login where Userid = '".$uid."'");
           $row = $rs->fetch_array();
        if($row[0] != 0){
            // User ID already exists hence provide error message
            $warden = new WardenClass($uid, $uname);
            $warden->setErrMsg("User ID Already Exist! Please try with another UserID");
            $_SESSION["wardenErroMsg"] = serialize($warden);
            header("Location: WardenRegistrationForm.php");
            die();
        
        }else{
            
          $qry1 = "INSERT INTO `login` (`Userid`, `Name`, `Password`, `Role`, `Email`, `Accstatus`, `Question`, `Answer`) VALUES ('$uid', '$uname', '$password', '$urole', '$uemail', '$disableRecord', '$question', '$answer')";
          $qry2="INSERT INTO `warden` ( `Userid`, `Name`, `Contactno`, `Role`) VALUES ('$uid', '$uname', '$ucontact', '$urole')";
        if(( $db->query($qry1))&&($db->query($qry2))){
          $_SESSION["msg"] = "Thank you for registering with us<br> Your account will be activated after 24hrs";
             
        }else{
            $_SESSION["msg"] = $db->error;
        }
         header("Location: ShowMessages.php");
          
        }
        
        if($db){
            $db->close();
       }
       
     
    }
    
    
}

