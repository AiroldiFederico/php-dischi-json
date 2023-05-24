<?php

    //ottenere i dati da json
    $string = file_get_contents("dischi.json");
    //decodifica dati ricevuti
    $disc_list = json_decode( $string, true );


    //manipolazione dati
    $results = $disc_list;


    //ricreo l'API con i dati manipolati da inviare eventualmente
    header( 'Content-type: application/json');
    echo json_encode( $results );

    