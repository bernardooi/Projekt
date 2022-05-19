<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $name="login_info";


$conn = mysqli_connect($servername,$username,$password,$name);

    /*$db = mysql_select_db("login_info", $conn);
    $query = mysql_query("SELECT * from logininformation ", $conn);*/

$sql = "SELECT USERNAME, PASS FROM logininformation";

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
$conn->close();


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
<div id="header" class="bg-light border">
        <div id="WebTitle">
        <a href="nyaIndex.php"><img src="Images/Books.png" alt="" id="Title"></a>
        </div>
</div>


    <div id="sidenav" class="bg-light border">
   
    <a href="nyaIndex.php" class="sidenav_a" ><h2 class="sidenavButtons" id="home"></h2></a>
    <a href="profile.php" class="sidenav_a" ><h2 class="sidenavButtons" id="Profile"> </h2></a>
    <a href="" class="sidenav_a" ><h2 class="sidenavButtons" id="TopBooks"> </h2></a>
    <label class="switch">
    <input type="checkbox" id="toggleTheme" >
    <span class="slider round"></span>
    </label>
    </div>
    <a href="javascript:void(0)"><h1 id="Open" onclick="OpenSideNav()">></h1></a>
    <a href="javascript:void(0)"><h1 id="Close" onclick="CloseSideNav()"></h1></a>
    
    <div id="content">

        <div id="div1"></div>
            <div id="div2">
                <div id="formlayout">       
                        <form action="" method="POST" id="formen">
                            <h1 style="text-align:center;" >Login</h1>
                            <div id="insideform">
                                <h3 class="formNames">Username:</h3>
                                <input type="text" name="Username" class="skriv" required>
                                <br><br>
                                <h3 class="formNames">Password:</h3>
                                <input class="skriv" type="password" name="pass" required>
                                <br><br>
                                <input id="send" type="submit" name="skicka" value="Sign in   ">
                            </div>

                        <div id="registerDiv">
                            <h4 style="text-align:center;">Don't have an account? Sign up.</h4>   
                            <input type="button" onclick="location.href='Register.php'" value="Sign up" id="signup" />
                        </div>
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