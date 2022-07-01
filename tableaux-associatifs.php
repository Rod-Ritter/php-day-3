<?php

$peoples = [
    [
    'nom' => 'Nooravi',
    'prenom' => 'Amir',
    'email' => 'a@nooravi.com'
    ],

    
    [
    'nom' => 'Mousfi',
    'prenom' => 'Sara',
    'email' => 's@mousfi.com',

    ]
    ];

    // debug($peoples);

    // echo "le nom de Sara est "  .$peoples [1]['nom'];

    // $json_peoples = json_encode($peoples);

    // debug($json_peoples);

    $json_peoples = '{
    "nom" : "Nooravi",
    "prenom" : "Amir",
    "age" : 41
    
    }';

    debug($json_peoples);


   