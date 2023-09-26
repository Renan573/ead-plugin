<?php

    function getJSONFile($endpoint = '') {
        $url = 'https://api.sympla.com.br/public/v3/events' . $endpoint;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            's_token: 13cbe49b9403e5a4fadfa7da0c81987308e86459b3a63e237b193debe9180d9e',
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

?>
