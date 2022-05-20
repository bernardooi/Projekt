<?php
session_start();
error_reporting(0);
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

$var = 0;


if($_SERVER['REQUEST_METHOD']=="POST")
{
$user_name=$_POST["Username"];
$pass=$_POST["pass"];

    if(!empty($user_name) && !empty($pass))
    {
        $query = "SELECT * from logininformation where USERNAME = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);
//echo $query;

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['PASS'] === $pass)
                {
                    $_SESSION['loggedIn'] = 1;
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header('Location: index.php');
                    die;
                }
            }
        }
        echo '<script type="text/javascript">
        
        alert("Wrong username or password");

        </script>';
}
else{  echo '<script type="text/javascript">
    
    alert("Wrong username or password");

    </script>';

}
}


/*/session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $name="login_info";


$conn = mysqli_connect($servername,$username,$password,$name);

    /*$db = mysql_select_db("login_info", $conn);
    $query = mysql_query("SELECT * from logininformation ", $conn);*/

/*$sql = "SELECT USERNAME, PASS FROM logininformation";

$result = $conn->query($sql);
//echo $sql;
//if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $_username = $row["USERNAME"];
    
    $_PASSWORD_hash = $row["PASS"]; // är inte bra mot hackers för att den displayar bokstäver fortfarande.
    $_PASSWORD_hash;

    }
/*} else {
    echo "0 results";
}*/


/*$conn->close();*/


?>

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
<div id="header" style="background-color:<?php echo $background?>;">
        <div id="WebTitle">
        <a href="index.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
</div>


    <div id="sidenav" style="background-color:<?php echo $background?>;">
   
    <a href="index.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="home" ></h2></div></a>
    <a href="profile.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="Profile"></h2></div></a>
    <a href="TopBooks.php" class="sidenav_a" ><div class="sidenavbuttonDiv"><h2 class="sidenavButtons" id="TopBooks"></h2></div></a>
    </div>
    <a href="javascript:void(0)"><h1 id="Open" onclick="OpenSideNav()">></h1></a>
    <a href="javascript:void(0)"><h1 id="Close" onclick="CloseSideNav()"></h1></a>
    
    <div id="content">

        <div id="div1"></div>
            <div id="div2">
                <div id="formlayout">       
                        <form action="" method="POST" id="formen" style="background-color:<?php echo $background?>;">
                            <h1 style="text-align:center;" style="color:<?php echo $color?>;">Login</h1>
                            <div id="insideform">
                                <h3 class="formNames"style="color:<?php echo $color?>;">Username:</h3>
                                <input type="text" name="Username" class="skriv" required>
                                <br><br>
                                <h3 class="formNames"style="color:<?php echo $color?>;">Password:</h3>
                                <input class="skriv" type="password" name="pass" required>
                                <br><br>
                                <input id="send" type="submit" name="skicka" value="Sign in">
                            </div>

                        <div id="registerDiv">
                            <h4 style="text-align:center; color:<?php echo $color?>;">Don't have an account? Sign up.</h4>   
                            <input type="button" onclick="location.href='Register.php'" value="Sign up" id="signup" />
                        </div>
                        </form>
                </div>
            </div>
        <div id="div3">

                
</div>
    </div>

    <footer style="background-color:<?php echo $background?>;">   <div id="switchbox">
        <label class="switch">
    <input type="checkbox" id="toggleTheme" >
    <span class="slider round"></span>
    </label></div></footer>

    <script>
        $("#toggleTheme").on('change', function() {
				if($(this).is(':checked')) {
					$(this).attr('value', 'true');
					document.cookie = "theme=dark";
			
				} else {
					$(this).attr('value', 'false');
					document.cookie = 'theme=; Max-Age=0';
			
				}
			});
    </script>
    <script src="sideNav.js">
        $( document ).ready(function() {
            $("#logoutbutton").css("width","0");
            $("#logout").css("width","0");
            $("outbutton").text("");

});


if($_SESSION['loggedIn']== 1)
{
    $("#login").css("width","0");
    $("#loginbutton").css("width","0");
    $("#button").text("");
}
if($_SESSION['loggedIn']== 0)
{
    $("#login").css("width","10vw");
    $("#loginbutton").css("width","10vw");
    $("#button").text("Sign out");
    
}
    </script>

</body>
</html>