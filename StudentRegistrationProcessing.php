<?php
include_once './StudentClass.php';
session_start();
if(isset($_POST["RegisterBtn"])){
   
    $db = new mysqli("localhost", "root", "", "hostelmng");
    if($db->connect_errno){
        echo "Failed to connect to database : ".$db->connect_error;
    }else{
        $disableRecord = 0;
        // Please Sanitize the inputs
        $uregno = $_POST["uRegNo"];
        $uid = $_POST["uID"];
        $uname = $_POST["uName"];
        $ugender=$_POST["uGender"];
        $date=$_POST["date"];
        $ucontact=$_POST["uContact"];
        $guardian=$_POST["uGuardian"];
        $relationship=$_POST["uRelationship"];
        $gcontact=$_POST["uGconNo"];
        $paddress=$_POST["uPaddr"];
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
        
         $rs = $db->query("SELECT count(*) from login where Name = '".$uid."'");
           $row = $rs->fetch_array();
        if($row[0] != 0){
            // User ID already exists hence provide error message
            $student = new StudentClass($uid, $uname);
            $student->setErrMsg("User ID Already Exist! Please try with another UserID");
            $_SESSION["studentErroMsg"] = serialize($student);
            header("Location: StudentRegistrationForm.php");
            die();
        
        }else{
            
          $qry1 = "INSERT INTO `login` (`Userid`, `Name`, `Password`, `Role`, `Email`, `Accstatus`, `Question`, `Answer`) VALUES ('$uid', '$uname', '$password', '$urole', '$uemail', '$disableRecord', '$question', '$answer')";
          $qry2="INSERT INTO `student` ( `StdRegNo`, `Userid`, `Name`, `Gender`, `Dob`, `ContactNo`, `Guardian`, `Relationship`, `GuardianConNo`, `PermanentAddr`, `Role`, `Email_id`) VALUES ('$uregno', '$uid', '$uname', '$ugender', '$date', '$ucontact', '$guardian', '$relationship', '$gcontact', '$paddress', '$urole', '$uemail')";
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

