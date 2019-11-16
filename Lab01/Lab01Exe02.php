<?php
/**
 *  @author Natasha Stojanova
 */
//Vezhba 2.1  KONKATENACIJA-NA-STRING
$fName="Natasha";
$lName="Stojanova";
echo $fName." ".$lName;

//Vezhba 2.2  FUNKCII

echo "<br>";
$str="doggo";
$str1=strtoupper($str);
echo $str1;

echo "<br>";
//Vezhba 2.3    POLE->STRING

$fruit=array('apple','banana','lemon');
$spr="..";
$string=implode($spr,$fruit);
echo $string;


?>