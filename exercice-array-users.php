<?php

$users = [
    
    "firstname" => "Amir",
    "lastname" => "Nooravi",
    "pseudo" => "",
    "age" => "41",
    "food" => "",
    "sport" => ""

];

foreach($users as $key => $value){
    if($value == ""){
        echo "$key : Aucune information<br>";
    } else{
        echo "$key = $value<br>";
    }
}




