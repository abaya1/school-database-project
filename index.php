<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
		//retrieve the session variables
		session_start();
		
		if(isset($_SESSION['username']))
        {
            header("Location:homepage.php?successful");
        }


	

	?>



<div class="row" style=" box-shadow: 1px 1px 1px 1px rgba(5, 0, 0, 0.068); background-color: #000000; background-image: linear-gradient(315deg, #000000 0%, #414141 74%);; height: 5vh;">
    <div class="col-12">
        <h2 style="color: whitesmoke; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> FAKE WEBSITE</h2>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-top: 30vh;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="login.php" method="post">
             &emsp; &emsp; &emsp;  Username: <input placeholder="username" type="text" name = "username" id="user"><br><br>
             &emsp; &emsp; &emsp;  Password: <input placeholder="password" type="password" name="password" id="pass"><br>
             &emsp; &emsp; &emsp;  <button type="" class="btn btn-primary" id= "loginBtn"> Log in</button>
                <p style="color: red;"> &emsp; &emsp; &emsp; <?php if(isset($_GET['err'])){echo $_GET['err']; } ?> </p>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <p id = "errorsLabel" style="color: red;"></p>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"> &emsp; &emsp; &emsp; <a href="registration.php">or register</a></div>
        <div class="col-4"></div>
    </div>
</div>  
</body>
</html>

