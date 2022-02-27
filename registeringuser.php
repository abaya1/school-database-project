<?php

        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
        $name = $_POST['name'];
        $DOB = $_POST['DOB'];
        $GPA = $_POST['GPA'];
        $level = $_POST['level'];
        $major = $_POST['Major'];
		
        $sql = "INSERT INTO STUDENT(Firstname, DOB, Major, GPA, Lev) VALUES('$name','$DOB','$major','$GPA','$level')";

     

        if($conn->query($sql))
        {
            header("Location:addStudent.php?successful");
        }
        else
        {
            echo $conn->error;
            header("Location:addStudent.php?unsuccessful");
        }

	













?>