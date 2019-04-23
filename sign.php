<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "web";

    $conn = mysqli_connect($server, $user, $password, $db);

    if(isset($_POST['cl'])){
        $conn = mysqli_connect($server, $user, $password, $db);
        
        if(!$conn)
            die("cannot connect with database");
        else{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $sql = "insert into customer values('$name', '$email', '$pass')";
            mysqli_query($conn, $sql);
            
            print '<script>alert("Your account is created successfully")</script>';
            header("location: login.php");
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
                background-color: darkkhaki;
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
    
    <body>
        
        <div class="shaker">
        
            <div class="container">
                <h1>Registration Page</h1><br>
            </div>
        
            <form action="sign.php" method="post">
            
                <div class="col-xs-4">
                    <label for="usr">Enter your name:</label>
                    <input type="text" class="form-control" id="usr" name="name" placeholder="Your Name"><br>
                
                    <label for="usr">Enter your email:</label>
                    <input type="text" class="form-control" id="usr" name="email" placeholder="Your Email"><br>
                
                    <label for="usr">Enter your password:</label>
                    <input type="password" class="form-control" id="usr" name="pass" placeholder="Your Password"><br>
                
                    <input type="submit" value="Register" name="cl">
                </div>
            
            </form>
            
        </div>
        
    </body>
    
</html>