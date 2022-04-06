
<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:Student.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind Fizz Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
   
    <style type="text/css">
        body {
            width: 100%;
            background: url(image/2384075.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .block {
  display: block;
  width: 15%;
  border: none;
  background-color: greenyellow;
  color: black;
  padding: 14px 28px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  
}

    </style>
    <div class = "right">
        <a href="index.html" class="link"> Logout </a>
    </div>
    
</head>

<body>
    <center>
        <div class="index">
            <h1  style="color:black;"> Mind Fizz Quiz </h1>
            

            <input type="button" class="block" onclick="location.href='startQuiz.php';" value="All Quizes" /> </br>
            <input type="button" class="block" onclick="location.href='studentrank.php';" value="Ranking" />
          
        

        </div>
    </center>
</body>

</html>