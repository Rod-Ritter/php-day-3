<?php

$users = file_get_contents("./data/users.json");

$json_peoples = json_encode($users);

$profiles = json_decode($json_peoples, true);

// echo $profiles["results"];