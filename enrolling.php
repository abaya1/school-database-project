<?php

        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
        $course = $_POST['course'];
        $ID = $_SESSION['StudentID'];


		$sql1 = "SELECT * FROM COURSE WHERE name = '$course'";

        $result = mysqli_query($conn, $sql1);
        //convert into an array
        $dataArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($dataArray as $row) {
            $courseid = $row['CourseID'];
            $Did = $row['DepartmentID'];
            echo $courseid;
            echo $Did;
            echo $ID;
            $sql = "INSERT INTO Registration VALUES('$courseid','$ID','$Did')";
                }

     

        if($conn->query($sql))
        {
            header("Location:enroll.php?registration_successful");
        }
        else
        {
            echo $conn->error;
            header("Location:enroll.php?unsuccessful");
        }

	













?>