<?php

include './includes/header.php';
include './includes/functions.php';

?>

<main>
    <?php
    $tableau = array ();
    $tableau = [];
    $tableau = [true, 45, 'terre',[24,56,83]];

    $tableau [] = 'juin';
    array_push($tableau, 'voiture', 'canard');
    
    debug($tableau);
    debug($tableau[2]);

    

    $notes = [12,5,16,7];

    // afficher la moyenne des notes 
    // $nbElementNotes = count($notes);
    // $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
    // $moyenneNotes = $sommeNotes/$nbElementNotes;

    // echo $moyenneNotes;

    // $tab2 = array_merge($tableau, $notes);

    // debug($tab2);

    // for($i=0; $i <count($notes) ; $i++){
    //     echo $notes [$i] ,'<br>';
    // }

    $sommeNotes = 0;

    // for($i=0; $i <count($notes) ; $i++){
    //     $sommeNotes = $sommeNotes + $notes[$i];
    //     $moyNote = $sommeNotes / count($notes);

    //     echo $moyNote;
    // }

    // foreach ($notes as $note){
    //     echo $notes;
    // }
    
    $fruits = ['banane' => "jaune", 'pomme' => 'rouge', 'kiwi' => 'vert'];
    debug($fruits);
    echo 'la couleur de la pomme est :' .$fruits['pomme'], '<br>';

    $age = ['amir' => 42, 'sara' => 34, 'leïla' => 42];

    $chaine= implode('-',$age);
    echo $chaine;

    // $age2 explode ('-')

    $age ['paul'] = 33;
    $age ['amir'] = 31;

    // foreach ($age as $key => $value){
    //     echo $key .' a ' . $value . ' ans ', '<br>';
    // }

    $resultat = "<ul>";

    foreach ($age as $key => $value){
        $resultat .= "<li>$key a $value ans <br></li>";
      
    }    
    $resultat .= "</ul>";

    echo $resultat;

    $planetes = ['mars', 'terre', 'pluton', 'venus', ];
    asort($planetes);
    asort($age);

    debug($planetes);
    debug($age);

    $tab = [
        'voiture' => 'ford',
        'nombre' => [1,2,3,4],
        'planete' => ['mars', 'terre'],
    ];

    // debug('ceci est'.$tab('nombre'));









    

  



    ?>
    
</main>


<?php

require './includes/footer.php';







