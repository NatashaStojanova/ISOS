<?php

//Vezhba 3.1  DEFINIRANJE-NA-POLINJA i Vezbha 3.2 IZMINUVANJE-NA-POLINJA

$numArray=array(2,5,6,10,41,24,32,9,16,19);

foreach ($numArray as $value){
    echo $value." ";
}

echo "<br>";

$associativeArray = array("name" => 'Natasha',"lastName"=>'Stojanova',"city"=>'Veles');

echo $associativeArray['name']." ".$associativeArray['lastName']." ".$associativeArray['city'];

$students=array(

    "Natasha" => array (
        "city"=>'Veles',
        "age"=>21
    ),
    "Konstantin"=>array(
        "city"=>'Gostivar',
        "age"=>22
    )

);


//VEZHBA 3.3  MAX-MIN-ELEMENT

$numArray=array(2,5,6,10,41,24,32,9,16,19);
$maxValue=max($numArray);
echo $maxValue;

$minValue=min($numArray);
echo $minValue;


?>