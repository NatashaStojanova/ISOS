<?php
/**
 *  @author Natasha Stojanova
 */
//Vezhba 1.1  DEFINIRANJE-NA-POLINJA i Vezbha 1.2 IZMINUVANJE-NA-POLINJA

$numArray=array(2,5,6,10,41,24,32,9,16,19);

foreach ($numArray as $value){
    echo $value." ";
}

echo "<br>";



$associativeArray = array("name" => 'Natasha',"lastName"=>'Stojanova',"city"=>'Veles');

//echo $associativeArray['name']." ".$associativeArray['lastName']." ".$associativeArray['city'];
echo "<br>";
foreach($associativeArray as $key=>$value){
    echo" $value";
}

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


//VEZHBA 1.3 DODAVANJE NA NOVO POLE

echo "<br>";

$numArray=array(2,5,6,10,41,24,32,9,16,19);
$newArray=array();


foreach ($numArray as $value){

    if($value>20){
        array_push($newArray,$value);
    }
}
foreach ($newArray as $value){
    echo $value." ";
}
echo "<br>";
//VEZHBA 1.4

$string="PHP is a widely-used general-purpose scripting language that is especially suited for Web development";
$tempArray=explode(" ",$string);
foreach($tempArray as $key=>$value){
    echo" $value";
}
echo "<br>";
$final=array();
foreach ($tempArray as $key => $value) {
    $newKey = strlen($value);
    $final[$newKey] = $value;
}

foreach($final as $key=>$value){
    echo" $value";
}

?>