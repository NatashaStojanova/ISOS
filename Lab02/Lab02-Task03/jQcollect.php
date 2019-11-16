<?php
$name=$_POST["name"];
//$gender=$_POST["gender"];
//$address=$_POST["address"];
//$mail=$_POST["email"];
//$username=$_POST["username"];
//$password=$_POST["password"];
$rememberMe=$_POST["rememberMe"];
//$cookie_name="username";

//if($rememberMe==true)
 //   setcookie($cookie_name,$username,time()+7200);
//header("Location: localhost:8080/jquery.php");

//echo "<h1>Hello</h1>";

$_SESSION["username"] = $username;
if($rememberMe==true){
    setcookie("username",$username,time()+3600);
    
}

echo "<h1>HELLO</h1>";

