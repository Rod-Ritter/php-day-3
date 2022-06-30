<?php

// $users = [
    
//     "firstname" => "Amir",
//     "lastname" => "Nooravi",
//     "pseudo" => "",
//     "age" => "41",
//     "food" => "",
//     "sport" => ""

// ];

// foreach($users as $key => $value){
//     if($value == ""){
//         echo "$key : Aucune information<br>";
//     } else{
//         echo "$key = $value<br>";
//     }
// }

$nombres = [4,15,2,145,42,5,78,12];


// for($i = 0; $i< count($nombres);$i++){
//     $nbrStock = 'test .$i';
//     $nonbres [$i] = $nbrStock;

// }
// foreach ($nombres as $valeur) {
//     echo $valeur;
// }   

$nbmax = $nombres[0];
foreach ($nombres as $nbr) {
    if ($nbr > $nbmax) {
        $nbmax = $nbr;
    }
}
echo $nbmax; 




// debug($nombres[$i]);




