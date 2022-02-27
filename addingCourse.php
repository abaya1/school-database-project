<?php

        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
        $name = $_POST['name'];
        $CourseID = $_POST['CourseID'];
        $DepartmentID = $_POST['Department'];

		
        $sql = "INSERT INTO COURSE(name, CourseID, DepartmentID) VALUES('$name','$CourseID','$DepartmentID')";

     

        if($conn->query($sql))
        {
            header("Location:addCourse.php?successful");
        }
        else
        {
            echo $conn->error;
            //header("Location:addStudent.php?unsuccessful");
        }

	













?>