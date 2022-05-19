<?php

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

    <div id="header" class="bg-light border">
        
        <div id="WebTitle">
    <a href="nyaIndex.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
        <a href="login.php" id="login">
            <div id="loginbutton" class="border-right border-left">
                <h2 id="button">Sign in</h2>
            </div>
        </a>
    </div>

    <div id="sidenav" class="bg-light border">
 
    <a href="nyaIndex.php" class="sidenav_a" ><h2 class="sidenavButtons" id="home"></h2></a>
    <a href="profile.php" class="sidenav_a" ><h2 class="sidenavButtons" id="Profile"></h2></a>
    <a href="" class="sidenav_a" ><h2 class="sidenavButtons" id="TopBooks"> </h2></a>
    <label class="switch">

					<input type="checkbox" id="toggleTheme" >
					<span class="slider round"></span>
				</label>
    </div>
    <h1 id="Open" onclick="OpenSideNav()">></h1>
    <h1 id="Close" onclick="CloseSideNav()"></h1>
    

    <script src="script.js">

    </script>
</body>
</html>