<?php
/**
 *  @author Natasha Stojanova
 */
session_start();
echo $_GET['ime'];
echo "<br>";
echo $_GET['prezime'];
echo "<br>";
echo $_GET['email'];
echo "<br>";
$polCovek= $_GET['pol'];
if($polCovek==1){
    echo "Masko";
}
else{
    echo "Zensko";
}


?>