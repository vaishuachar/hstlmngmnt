<!DOCTYPE html>
<html>    

<head>   
  <title>Insert Page</title> 
</head>    

<body>   
  <center> 
     <?php                 
     $conn = mysqli_connect("localhost", "root", "", "hostelmng");                   

    // Check connection         
    if($conn === false){           
       die("ERROR: Could not connect. "                  
         . mysqli_connect_error());        
    }                   

  
     // Taking all 5 values from the form data(input)         
     $roomno =  $_REQUEST['RoomNo'];         
     $catno = $_REQUEST['CatNo'];         
     $rtype =  $_REQUEST['Rtype'];         
     $rfees = $_REQUEST['Rfees'];        
     $noofstdoccupied = $_REQUEST['NoOfStdOccupied'];   
                      
     // Performing insert query execution               
     $sql1 = "INSERT INTO roomcat  VALUES ('$catno','$rtype','$rfees')";            
     $sql2 = "INSERT INTO room  VALUES ('$roomno','$catno','$rfees','$noofstdoccupied')";                  
     if((mysqli_query($conn, $sql1))&&(mysqli_query($conn, $sql2))){             
        echo "<h3>data stored in a database successfully." ;                        


     } else{           
        echo mysqli_error($conn);                
          
     }                     


    // Close connection        
    mysqli_close($conn);         
    ?>     
  </center> 
</body> 
</html>