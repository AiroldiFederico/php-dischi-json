<?php

    //ottenere i dati da json
    $string = file_get_contents("dischi.json");
    //decodifica dati ricevuti
    $disc_list = json_decode( $string, true );

    