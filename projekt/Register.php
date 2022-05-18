<?php
if($_COOKIE["theme"] == "dark")
{
    $background ="#1b1d1e";
    $color ="#fff";
}
else{
    $background ="#f1f1f1";
    $color="#1b1d1e";
}





if(isset($_POST["skicka"]))
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $name="login_info";
  $last_name=$_POST["lastname"];
  $first_name=$_POST["firstname"];
  $user_name=$_POST["Username"];
  $email=$_POST["epost"];
  $pass=$_POST["pass"];

  $conn = mysqli_connect($servername,$username,$password,$name);
  if($conn->connect_error){
      die("Failed:". $conn->connect_error);
  }
  else {
    echo '<script type="text/javascript">
    
            alert("Connected");
        
            </script>';
  }
  $sql = "INSERT INTO logininformation (FIRSTNAME, LASTNAME, USERNAME, EMAIL, PASS, TID) VALUES ('$first_name' , '$last_name', '$user_name', '$email', '$pass' , now())";

  if(mysqli_query($conn,$sql))
  {
    echo '<script type="text/javascript">
    
    alert("Added Successfully");

    </script>';
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
    <link rel="stylesheet" href="registerstyle.css">
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
        
   <a href="nyaIndex.php" class="sidenav_a"  ><h2 class="sidenavButtons" id="home"></h2></a>
   <a href="" class="sidenav_a"  ><h2 class="sidenavButtons"> </h2></a>
   <a href="" class="sidenav_a"  ><h2 class="sidenavButtons"> </h2></a>
   <label class="switch">
					<input type="checkbox" id="toggleTheme" >
					<span class="slider round"></span>
				</label>
   </div>
   <h1 id="Open" onclick="OpenSideNav()">></h1>
   <h1 id="Close" onclick="CloseSideNav()"></h1>
   
    <div id="content">
        <div id="spacediv">
        </div>
                <div id="formlayout">
                    <div id="formen" >
                        <div id="inne">
                        <form action="" method="POST" id="formRegister">
                        
                            <h3 class="formNames">First Name:</h3>
                            <input class="skriv" type="text" name="firstname" required>
                            <br><br>
                            <h3 class="formNames">Last Name:</h3>
                            <input class="skriv" type="text" name="lastname" required>
                            <br><br>
                            <h3 class="formNames">Username:</h3>
                            <input type="text" name="Username" class="skriv" required>
                            <br><br>
                            <h3 class="formNames">Email:</h3>
                            <input class="skriv" type="email" name="epost" required>
                            <br><br> 
                            <h3 class="formNames">Password:</h3>
                            <input class="skriv" type="password" name="pass" id="_pass" required>
                            <br><br>
                            <h3 class="formNames">Confirm Password:</h3>
                            <input class="skriv" type="password" name="confirmPass" id="_confirmPass" required>
                            <br><br>
                            <span id="agree">
                            <input type="checkbox" name="box" id="check" required onclick="CheckPass()"><h3 class="agree"> I agree with <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="agree" style="margin-left:0.5vw;"> Terms of service</a></h3>
                            </span>
                            <br><br>
                            <input id="send" type="submit" name="skicka">
                        </form>
                        </div>
                    </div>
                </div>
    </div>

    <script src="script.js">

    </script>
</body>
</html>