<?php
function notificator_send_message( $text ){

    $postArgs           = array();
    $postArgs['to']     = 'wqdxwIJTtqqELUPvvfQQaO8G6J4cYBFPNNFOF3GU';
    $postArgs['text']   = $text;

    $ch = curl_init( 'https://notificator.ir/api/v1/send' );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs );

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5 );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5 );

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    return json_decode( $response );
    
}