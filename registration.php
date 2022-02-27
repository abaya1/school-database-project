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
    <div class="row" style=" box-shadow: 1px 1px 1px 1px rgba(5, 0, 0, 0.068);   background-color: #000000; background-image: linear-gradient(315deg, #000000 0%, #414141 74%);; height: 5vh;">
        <div class="col-12">
            <h2 style="color: whitesmoke; text-align: center;"> FAKE WEBSITE</h2>
        </div>
    </div>
    <div class="row" style="margin-top: 30vh;">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="registering.php" method="post">
           <label for="">Username:</label> <input type="text" name = "username"><br><br>
           <label for="">Password:</label> <input type="password"  name="pass"><br><br>
           <label for="">StudentID:</label> <input type="number"  name="StudentID"><br><br>
                 <button type="submit" class="btn btn-primary" id= "loginBtn">Register</button>
             </form>
        </div>
        <div class="col-4"></div>

    </div>
</body>
</html>