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

    for ($i=0; $i <count($notes) ; $i++){
        echo $notes [$i];
    }

    


    // $resultat = "<ul>";

    // for ($i = 0 ; $i < count($tabNb) ; $i++) {
    //     $resultat .= "<li>";
    //     if (fmod($tabNb[$i]))
    //         $resultat .= "pair";
    //     else
    //         $resultat .= "impair";
    //     $resultat .= "</li>";
    // }    
    // $resultat .= "</ul>";

    // echo $resultat;

    // $resultat = "<ul>";

    $tab = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

function pair($data) // fonction qui retourne les elements d'un tableau par nombre pair ou impaire sous forme de liste html.
{
    echo '<ul>';

    foreach ($data as $data) {
        if ($data % 2 === 0) {
            echo '<li>' . $data . ' :  pair </li>';
        } else {
            echo '<li>' . $data . ' :  impair </li>';
        }
    }
    echo '</ul>';
}

echo (pair($tab));
    

    

    

    











    

  



    ?>
    
</main>


<?php

require './includes/footer.php';







