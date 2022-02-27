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
    <a class="nav-link active" aria-current="page" href="homepage.php" style="font-size: 2vw; color: #FFA400;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="" style="font-size: 2vw; color: #FFA400;">My Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="enroll.php" style="font-size: 2vw; color: #FFA400;">Enroll</a>
  </li>
</ul>
</div>
</div>







</body>
</html>