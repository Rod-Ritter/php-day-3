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

    echo count($tableau);

    $notes = [12,5,16,7];

    // afficher la moyenne des notes 
    $nbElementNotes = count($notes);
    $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
    $moyenneNotes = $sommeNotes/$nbElementNotes;

    echo $moyenneNotes;


    ?>
    
</main>


<?php

require './includes/footer.php';







