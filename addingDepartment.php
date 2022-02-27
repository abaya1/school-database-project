<?php

        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
        $name = $_POST['name'];
        $DID = $_POST['ID'];
        $chair = $_POST['chair'];

		
        $sql = "INSERT INTO DEPARTMENT VALUES('$DID','$name','$chair')";

     

        if($conn->query($sql))
        {
            header("Location:addDepartment.php?successful");
        }
        else
        {
            echo $conn->error;
            //header("Location:addStudent.php?unsuccessful");
        }

	













?>