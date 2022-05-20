<?php
error_reporting(0);
session_start();
    include("connection.php");
    include("functions.php");

    if($_COOKIE["theme"] == "dark")
    {
        $background ="#1b1d1e";
        $color ="#fff";
    }
    else{
        $background ="#f1f1f1";
        $color="#1b1d1e";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="featured.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script src="api.js"></script>
<script src="sideNav.js">

    </script>
    <div id="header" class="bgRound" style="background-color:<?php echo $background?>;">   
 
  
        <div id="WebTitle">
            
    <a href="index.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
        
        <a href="login.php" id="login">
            <div id="loginbutton" class="border-right border-left">
                <h2 id="button" style="color:<?php echo $color?>;">Sign in</h2>
            </div>
        </a>
        <a href="" id="logout">
            <div id="logoutbutton" class="border-right border-left">
                <h2 id="outbutton" style="color:<?php echo $color?>;">Sign out</h2>
            </div>
        </a>
    </div>

    <div id="sidenav" class="bgRound" style="background-color:<?php echo $background?>;">
 
    <a href="index.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="home" style="color:<?php echo $color?>;" ></h2></div></a>
    <a href="profile.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="Profile" style="color:<?php echo $color?>;"></h2></div></a>
    <a href="TopBooks.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="TopBooks" style="color:<?php echo $color?>;"></h2></div></a>

   </div>
    </div>
    <a href="javascript:void(0)"><h1 id="Open" onclick="OpenSideNav()">></h1></a>
    <a href="javascript:void(0)"><h1 id="Close" onclick="CloseSideNav()"></h1></a>
    <div id="box" class="123123">
        <div id="boxed" class="bgRound" style="background-color:<?php echo $background?>;">
        <div id="featured" class="123123">
                <div id="carouselExampleIndicators" class="carousel slide" id="" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" style="  margin-left: 10%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/weeb.jpeg" class="d-inline w-75 " style="margin-left:13%; margin-top:0.35%;" alt="" >
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-50 fixed-height" style="margin-left:13%; margin-top:0.35%;" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-25 fixed-height"  style="margin-left:12.5%; margin-top:0.35%;" alt="" >
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-25 fixed-height"  style="" alt="" >
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>    
            </div>
            </div>
        </div>

<footer style="background-color:<?php echo $background?>;">   <div id="switchbox">
        <label class="switch">
    <input type="checkbox" id="toggleTheme" >
    <span class="slider round"></span>
    </label></div></footer>
    <script>
     $.get("https://api.nytimes.com/svc/books/v3/lists/current/hardcover-fiction.json?api-key=txAzBOVxTpflhEes8iVZrVsvHIQwgsPx", function (data){
            
            console.log(data.results.books);
            console.log(data);
        })

    $("#toggleTheme").on('change', function() {
				if($(this).is(':checked')) {
					$(this).attr('value', 'true');
					document.cookie = "theme=dark";

				} else {
					$(this).attr('value', 'false');
					document.cookie = 'theme=; Max-Age=0';
		
				}
			});
if($_SESSION['loggedIn']== 1)
{
    $("#logoutbutton").css("display", "none");
}
if($_SESSION['loggedIn']== 0)
{
    $("#login").css("width","10vw");
    $("#loginbutton").css("width","10vw");
    $("#button").text("Sign out");
    $("#logoutbutton").css("display", "none");
}

    </script>


</body>
</html>