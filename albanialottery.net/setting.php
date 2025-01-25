<?php
//HANYA EDIT INI SAJA========================================================

$baseurl = "";
$url = 'https://panel.funcism.com/api/getNumber.php';
$name = 'albanialottery';

//BATASAN EDIT===============================================================
function numberToArray($number) {
    $numberString = (string) $number;
    $numberArray = str_split($numberString);
    return $numberArray;
}

function fetchLotteryData($url, $name) {
    $params = [
        'api_key' => '$2y$10$dfqW/qVBZ5vQ0ACqFxXhKOKXRSI1.Abd4oOdV6TvtloiJwKCEUnRG',
        'name'    => $name
    ];
    $queryString = http_build_query($params);
    $requestUrl = $url . '?' . $queryString;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $requestUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'CURL Error: ' . curl_error($ch);
        $data = null;
    } else {
        $data = json_decode($response, true);
    }
    curl_close($ch);
    return $data;
}
$data  = fetchLotteryData($url, $name);
?>