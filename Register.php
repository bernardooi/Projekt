<?php
if(isset($_POST["skicka"]))
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $name="login_info";
  $last_name=$_POST["lastnamn"];
  $first_name=$_POST["firstname"];
  $username=$_POST["Username"];
  $email=$_POST["epost"];
  $pass=$_POST["pass"];



  $conn = mysqli_connect($servername,$username,$password,$name);
  if($conn->connect_error){
      die("Failed:". $conn->connect_error);
  }
  else {
      echo "<h1>Connected</h1>";
  }
  $sql = "INSERT INTO logininformation (FIRSTNAME, LASTNAME, USERNAME, EMAIL, , TID) VALUES ('$first_name' , '$last_name', '$email', now())";

  if(mysqli_query($conn,$sql))
  {
      echo "<h1>Add successful</h1>";
  }
  else 
  {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div id="formlayout">
            <form action="" method="POST" id="formen">
                
                <h2 class="formNames">First Name:</h2>
                <input class="skriv" type="text" name="firstname">
                <br><br>
                <h2 class="formNames">Last Name:</h2>
                <input class="skriv" type="text" name="lastname">
                <br><br>
                <h2 class="formNames">Username:</h2>
                <input type="text" name="Username" class="skriv">
                <br><br>
                <h2 class="formNames">Email:</h2>
                <input class="skriv" type="email" name="epost">
                <br><br> 
                <h2 class="formNames">Password:</h2>
                <input class="skriv" type="password" name="pass">
                <br><br>
                <h2 class="formNames">Repeat Password:</h2>
                <input class="skriv" type="password" name="confirmPass">
                <br><br>
                <span id="agree">
                <input type="checkbox" name="box" id="check"><h3 class="agree"> I agree with <a href="" class="agree" style="margin-left:0.5vw;"> Terms of service</a></h3>
                </span>
                <br><br>
                <input id="send" type="submit" name="skicka" id="">
                
            </form>
        </div>
    </div>


    <script src="script.js">
    </script>
</body>
</html>