<?php

$conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');

    $username = $_POST['username'];
	$password = $_POST['password'];

    $sql = "SELECT * FROM USERS WHERE Username = '$username'";

    $result = mysqli_query($conn, $sql);
    $dataArray = mysqli_fetch_all($result);




    if(sizeof($dataArray) > 0)
     {

        //user was found 
            foreach($dataArray as $row)
            {
                if($row[0] == $username && $row[1] == $password)
                {
                    //proceed
                     
                    
                    //create session
                    session_start();
                    //save the info to the session
                    $_SESSION['username'] = $row[0];
                    $_SESSION['userType'] = $row[3];
                    $_SESSION['StudentID'] = $row['2'];
                    
        
                    //redirect to homepage			
                    header("Location:homepage.php");
                }
                else 
                {
                       //error
                       header("Location:index.php?err=Incorrect username or password");
                }

            }  
     } 
     else 
                {
                       //error
                       header("Location:index.php?err=Incorrect username or password");
                }

            
        
?>