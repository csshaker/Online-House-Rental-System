<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
        <div class="container">
            <h2>My Post (<?php echo $_SESSION['name'];?>)</h2>
        </div>
        
    </body>
    
    
</html>

<?php
    $name = $_SESSION['name'];
    $pass = $_SESSION['pass'];
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "web";

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "select * from rent where name = '$name' and password = '$pass'";
    $ret = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($ret);

    if($count == 0)
        echo "You have no post";
    else{
        while($row = mysqli_fetch_array($ret)){
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>View</th>
                                <th>Number of room</th>
                                <th>price</th>
                                <th>location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo '
            <img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" width=400 height=400>
        ';
            echo "<br>";?></td>
                                <td><?php echo $row['room']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['loc']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
    
</html>

<?php
        }
    }
?>