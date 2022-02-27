<?php

        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $ID = $_POST['StudentID'];
        $kind = 'student';

		
        $sql = "INSERT INTO USERS(username, passwords, StudentID, Kind) VALUES('$username','$password','$ID','$kind')";

     

        if($conn->query($sql))
        {
            $_SESSION['username'] = $username;
            $_SESSION['userType'] = $kind;
            $_SESSION['StudentID'] =$ID;
            header("Location:homepage.php?registration_successful");
        }
        else
        {
            echo $conn->error;
            header("Location:registration.php?unsuccessful");
        }

	













?>