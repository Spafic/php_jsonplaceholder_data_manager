<?php
function json_Content($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    $result = curl_exec($curl);
    $result = json_decode($result, true);
    curl_close($curl);
    return $result;
}


