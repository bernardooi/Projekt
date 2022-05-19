<?php
error_reporting(0);
session_start();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <div id="header" style="background-color:<?php echo $background?>;">
        
        <div id="WebTitle">
    <a href="index.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
        <a href="login.php" id="login">
            <div id="loginbutton" class="border-right border-left">
                <h2 id="button"style="color:<?php echo $color?>;">Sign in</h2>
            </div>
        </a>
    </div>

    <div id="sidenav" style="background-color:<?php echo $background?>;">
 
    <a href="index.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="home"style="color:<?php echo $color?>;" ></h2></div></a>
    <a href="profile.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="Profile"style="color:<?php echo $color?>;"></h2></div></a>
    <a href="TopBooks.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="TopBooks"style="color:<?php echo $color?>;"></h2></div></a>
    
    </div>
    <h1 id="Open" onclick="OpenSideNav()">></h1>
    <h1 id="Close" onclick="CloseSideNav()"></h1>
    
    <div id="profileLayout"></div>

    <footer style="background-color:<?php echo $background?>;">   <div id="switchbox">
        <label class="switch">
    <input type="checkbox" id="toggleTheme" >
    <span class="slider round"></span>
    </label></div></footer>
    
    <script src="sideNav.js">

    </script>
</body>
</html>