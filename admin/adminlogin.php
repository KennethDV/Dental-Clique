<?php
include '../connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $pass = $_POST['password']; 

    if(!empty($username) && !empty($pass)){

        $query = "select * from admin where username = '$username' limit 1";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res) != 0){
            $row = mysqli_fetch_assoc($res);
            if($username == $row['username'] && ($pass == $row['password'])){
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $row['user_id'];
                header('Location: ./adminpage.php');
                }else{
                    echo 'incorrect credentials';
                    header('Location: ./adminlogin.php');
                    
                }
            }
        }else{
            echo 'failed';
        }
    }else{
        echo 'fill up the fields';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div id="box">
        <h1>Login</h1>
        <form method="post">
            <div class="container-sm">
                <div class="row">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <input class="btn btn-dark" name="login" type="submit" value="Submit" style="float: right; width: 200px; text-align: center;">
                </div>
            </div>
        </form>
    </div>
    <style>
        body {
            font-family: 'Cabin', sans-serif;
            background-image: url('../assets/img/namelogo.png');
            background-color: #E3F4F4;
            background-position: center top;
            background-repeat: no-repeat;
        }

        h1 {
            color: white;
            text-align: center;
        }

        #box {
            border: 2px;
            border-radius: 7px;
            background-color: #3E64FF;
            position: absolute;
            top: 45%;
            left: 40%;
            transform: translate(0, -50%);
            width: 400px;
            padding: 20px;
            opacity: 90%;
        }

        a {
            color: aliceblue;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>