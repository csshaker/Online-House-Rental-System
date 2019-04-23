<?php
    session_start();

    $name = $_SESSION['name'];

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "web";

    if(isset($_POST['cl'])){
        if($_POST['cl'] == 'Post'){
            $conn = mysqli_connect($server, $user, $password, $db);
        
            if(!$conn)
                die("cannot connect with database");
            else{
                $name = $_SESSION['name'];
                $pass = $_SESSION['pass'];
                $room = $_POST['room'];
                $price = $_POST['price'];
                $loc = $_POST['loc'];
                $imagename = $_FILES['myimage']['name'];
                $imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));
            
                $sql = "insert into rent values('$name', '$pass', '$room', '$price', '$loc', '$imagetmp')";
                mysqli_query($conn, $sql);
            
                print '<script>alert("your post is successfully added")</script>';
            }
        }
        else if($_POST['cl'] == "Search"){
            $_SESSION['se'] = $_POST['loca'];
            $_SESSION['pr'] = $_POST['pra'];
            header("location: search.php");
        }
        else{
            session_destroy();
            header("location: home.php");
        }
    }
?>

<!DOCTYOE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
        <nav class="navbar navbar-inverse">
            
            <div class="collapse navbar-collapse" id="myNavbar">
                
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><?php echo $name; ?></a></li>
                    <li><a href="mypost.php">My Post</a></li>
                    <li><a href="allpost.php">All Post</a></li>
                </ul>
                
            </div>
            
        </nav>
        
        <form action="profile.php" method="post" enctype="multipart/form-data">
            
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Add Your home info</h3>
                            
                            <label for="usr">Enter the number of room:</label>
                            <input type="text" class="form-control" id="usr" name="room" placeholder="Number of rooms"><br>
                
                            <label for="usr">Enter the price:</label>
                            <input type="text" class="form-control" id="usr" name="price" placeholder="Price"><br>
                    
                            <label for="usr">Enter the house location:</label>
                            <input type="text" class="form-control" id="usr" name="loc" placeholder="Location"><br>
                    
                            <label for="usr">Upload a picture of the house:</label>
                            <input type="file" name="myimage"><br>
                
                            <input type="submit" value="Post" name="cl">
                            <input type="submit" value="Log out" name="cl"><br><br>
                        </div>
                        
                        <div class="col-sm-4">
                            <h3>Search Your Home</h3>
                            
                            <label for="usr">Enter your location:</label>
                            <input type="text" class="form-control" id="usr" placeholder="Your location" name="loca"><br>
                    
                            <label for="usr">Enter your budget:</label>
                            <input type="text" class="form-control" id="usr" placeholder="Your budget" name="pra"><br>
                    
                            <input type="submit" value="Search" name="cl">
                        </div>
                    </div>
                </div>
            
            </form>
        
    </body>
</html>