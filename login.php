<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "web";

    if(isset($_POST['cl'])){
        $conn = mysqli_connect($server, $user, $password, $db);
        
        if(!$conn)
            die("cannot connect with database");
        else{
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $sql = "select * from customer where email = '$email' and password = '$pass'";
            $ret = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($ret);
            $row = mysqli_fetch_array($ret);
            
            if($count == 1){
                $_SESSION['name'] = $row['name'];
                $_SESSION['pass'] = $row['password'];
                header("location: profile.php");
            }
            else
                print '<script>alert("email or password is incorrect or your account not exist")</script>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            body{
                background-color: coral;
            }
            
            .shaker{
                position:fixed;
                top: 50%;
                left: 50%;
                width: auto;
                height: auto;
                margin-top: -9em; 
                margin-left: -15em; 
            }
        </style>
    </head>
    
    <body style=font-family:consolas>
        
        <div class="shaker">
            <div class="container">
                <h1>Log in form</h1>
            </div>
        
            <form action="login.php" method="post">
            
                <div class="col-xs-4">
                    <label for="usr">Enter your email:</label>
                    <input type="text" class="form-control" id="usr" name="email" placeholder="Your Email"><br>
                
                    <label for="usr">Enter your password:</label>
                    <input type="password" class="form-control" id="usr" name="pass" placeholder="Your Password"><br>
                
                    <input type="submit" value="Log in" name="cl">
                </div>
            
            </form>
        </div>
        
    </body>
</html>