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
    $nbElementNotes = count($notes);
    $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
    $moyenneNotes = $sommeNotes/$nbElementNotes;

    echo $moyenneNotes;

    $tab2 = array_merge($tableau, $notes);

    debug($tab2);

    for ($i=0; $i <count($notes) ; $i++){
        echo $notes [$i];
    }


    ?>
    
</main>


<?php

require './includes/footer.php';







