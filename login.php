<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="header" class="bg-light border">
        <div id="WebTitle">
            <h1 id="Title">Books</h1>
        </div>
</div>


    <div id="sidenav" class="bg-light border">
   
   <a href="nyaIndex.php" ><h2 class="sidenavButtons" id="home"></h2></a>
   <a href="" ><h2 class="sidenavButtons"> </h2></a>
   <a href="" ><h2 class="sidenavButtons"> </h2></a>
   </div>
   <h1 id="Open" onclick="OpenSideNav()">></h1>
   <h1 id="Close" onclick="CloseSideNav()"></h1>
   
    <div id="content">


        <div id="div1"></div>
        <div id="div2">
            
            <div id="formlayout">
                    
                    <form action="" method="POST" id="formen">
                    
                        <h2 class="formNames">Username:</h2>
                        <input type="text" name="Username" class="skriv">
                        <br><br>
                        <h2 class="formNames">Password:</h2>
                        <input class="skriv" type="password" name="pass">
                    
                        <br><br>
                        <input id="send" type="submit" name="skicka" id="" value="Sign in   ">

                        <a href="Register.php"><div id="signup"></div></a>
                    </form>
             
        
            </div>
               
        </div>
        <div id="div3">

                
</div>
    </div>
    <script src="script.js">
    </script>

</body>
</html>