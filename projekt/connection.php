<?php

$servername = "localhost";
$username = "root";
$password = "";
$name="login_info";

if (!$conn = mysqli_connect($servername,$username,$password,$name))
{
    die("failed to connect!");
}

