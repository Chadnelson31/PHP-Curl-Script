<?php


// cURL GET request using instagrams user media endpoint
function getRequest($url){
    //initialize cURL request
    $curl = curl_init();

    //set cURL options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);

    //store json response in memory
    $json = curl_exec($curl);

    //close cURL request and return the json in string format
    curl_close($curl);
    return $json;
}
?>
