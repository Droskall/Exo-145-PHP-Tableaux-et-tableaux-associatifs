<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo print_r($fruits)."<br>";
echo $fruits[2];

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " .$age["Ben"]  . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x  . ", Value=" . $y ;
}


//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
echo ($colors);
rsort($colors);
echo ($colors);


// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo ($age);





