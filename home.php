<?php

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
            .shaker{
                align-content: center;
            }
            
            body{
                background-color: lightblue;
            }
        </style>
    </head>
    
    <body style=font-family:consolas>
        
        <nav class="navbar navbar-inverse">
            
            <div class="collapse navbar-collapse" id="myNavbar">
                
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="post.php">Post</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Log in</a></li>
                </ul>
                
            </div>
            
        </nav>
        
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="im1.jpg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="im2.jpg" alt="Chicago" style="width:100%;">
                    </div>
    
                    <div class="item">
                        <img src="im3.jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
    </body>
    
</html>