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


    ?>
    
</main>


<?php

require './includes/footer.php';







