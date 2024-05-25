<?php 
// printing the php

echo "hello world";
//  declaring a variable

$name ="Yathish Jinde";
echo  $name;

// concatination
echo "h1".$name."<br>";

// arrays
//  1. Indexed array - 0 1 2 3 4 5 6
// 2. Assosiative array - ["name" => "yathish"]
// 3. Multidimensional array -

// indexed array
$Games = array("ASV","Half-Life","Condition-Zero","WarCraft"); 
// echo $Games[0]; 
var_dump($Games);

// assosiative array
$details =array("name" => "Yathish Jinde", "Age"=>25, "height"=>175);
echo $details["name"]."<br>";

foreach ($details as $detail) {
    echo $detail."<br>";
}
$age = 24;
if ($age <= 18) {
     echo ("not allowed to drink"); 
}
     elseif ($age >= 21) {
        echo ("are allowed to drink");   
     }
    
























