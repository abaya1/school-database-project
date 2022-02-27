<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #EAF6FF;">

<?php
        $conn = mysqli_connect('localhost', 'admin', '123456', 'hw5');
		//retrieve the session variables
		session_start();
		
		$username = $_SESSION['username'];
		$userType = $_SESSION['userType'];
        $StudentID = $_SESSION['StudentID'];

	

	?>

	<?php 
		if($userType == 'admin') {
			//leave tag unclosed
			$sql1 = "SELECT * from DEPARTMENT";
			$sql2 = "SELECT * FROM STUDENT";
			$sql3 = "SELECT * FROM COURSE";
	
	?>


<div class="row" style=" box-shadow: 1px 1px 1px 1px rgba(5, 0, 0, 0.068); background-color: #232528; height: 5vh;">
    <div class="col-12" style="position: relative;">
        <h4 style=" display:inline-block; position:absolute; color: whitesmoke; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" > <?php echo "hello ", $username, "!"   ?></h4>
        <h2 style=" display:block; position:relative; color: whitesmoke; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> FAKE WEBSITE</h2>
        <a href="logout.php"><h6 style="display:block; color:whitesmoke; position:absolute; right:5%; top:30%;">logout</h6></a>
    </div>
</div>
<div class="row">
<div class="col-lg-2" style="height: 100vh; background: #2A2A72">
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="" style="font-size: 2vw; color: #EAF6FF;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="addStudent.php" style="font-size: 2vw; color: #EAF6FF;">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active link" href="addCourse.php" style="font-size: 2vw; color: #EAF6FF;">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active link" href="addDepartment.php" style="font-size: 2vw; color: #EAF6FF;">Departments</a>
  </li>
  <br><br><br><br><br><br><br><br><br>
</ul>
</div>
<div class="col-lg-3">
     <h2>Departments</h2>
     <ul class="list-group">
<?php
        
        //run the query
        $result = mysqli_query($conn, $sql1);
        //convert into an array
        $dataArray = mysqli_fetch_all($result);
        foreach($dataArray as $row) {
            echo '<li class="list-group-item">', $row[1], "</li> ";
        }
    
    ?>
</div>
<div class="col-lg-3">
    <h2>Courses</h2>
<?php
        
        //run the query
        $result = mysqli_query($conn, $sql3);
        //convert into an array
        $dataArray = mysqli_fetch_all($result);
        foreach($dataArray as $row) {
            echo '<li class="list-group-item">', $row[1], "</li> ";
        }
    
    ?>
</div>
<div class="col-lg-3">
    <h2>Students</h2>
<?php
        
        //run the query
        $result = mysqli_query($conn, $sql2);
        //convert into an array
        $dataArray = mysqli_fetch_all($result);
        foreach($dataArray as $row) {
            if($row[1] == "admin"){continue;}
            echo '<a href="student.php?name=',$row[1],'"><li class="list-group-item">', $row[1], "</li><a>";
        }
    
    ?>
</div>
<div class="col-lg-1"></div>
</div>

<a href=""></a>
<?php
        
        }
        else
        {
		?>
        
<div class="row" style=" box-shadow: 1px 1px 1px 1px rgba(5, 0, 0, 0.068); background-color: #232528; height: 5vh;">
    <div class="col-12" style="position: relative;">
        <h4 style=" display:inline-block; position:absolute; color: whitesmoke; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" > <?php echo "hello ", $username, "!"   ?></h4>
        <h2 style=" display:block; position:relative; color: whitesmoke; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> FAKE WEBSITE</h2>
        <a href="logout.php"><h6 style="display:block; color:whitesmoke; position:absolute; right:5%; top:30%;">logout</h6></a>
    </div>
</div>
<div class="row">
<div class="col-lg-2" style="height: 100vh; background: #2A2A72">
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="" style="font-size: 2vw; color: #FFA400;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="myCourses.php" style="font-size: 2vw; color: #FFA400;">My Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active link" href="enroll.php" style="font-size: 2vw; color: #FFA400;">Enroll</a>
  </li>
</ul>
</div>
<div class="col-5">
<Table>
    <tr>
    <TH>StudentID &emsp;</TH>
    <TH>Name &emsp;</TH>
    <TH>DOB &emsp;</TH>
    <TH>Major &emsp;</TH>
    <TH>GPA &emsp;</TH>
    <TH>Grade &emsp;</TH>
    </tr>
    <tr>
    <?php 
			$sql = "SELECT * FROM STUDENT WHERE StudentID = '$StudentID'";
             //run the query
            $result = mysqli_query($conn, $sql);
             //convert into an array
             $dataArray = mysqli_fetch_all($result);
             foreach($dataArray as $row) {
                  foreach($row as $thing) {
                     echo "<td>", $thing, "&emsp; </td>";
                     }
        }
	
    ?>
    </Table>


</div>
<div class="col-5">
<h2>Enrolled Classes</h2>
     <ul class="list-group">
<?php 
			$sql = "SELECT * FROM Registration NATURAL JOIN COURSE WHERE StudentID = '$StudentID'";
             //run the query
            $result = mysqli_query($conn, $sql);
             //convert into an array
             $dataArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
             foreach($dataArray as $row) {
                     echo '<li class="list-group-item">', $row['name'],'  ', "&emsp; </li>";
                     }
        
	
    ?>
    </ul>

</div>
</div>












<?php      
    }
    ?>
</body>
</html>