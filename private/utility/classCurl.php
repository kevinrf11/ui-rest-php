<?php

class CurlManager{
    public $serviceUrl;
    public $ch;

    function __construct($serviceUrl){
        $this->serviceUrl = $serviceUrl;
        $this->ch = curl_init();
    }
    public function sendPostRequest($bodyRaw, $reqName){
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        $body = json_encode($bodyRaw);

        curl_setopt($this->ch, CURLOPT_URL, $this->serviceUrl . '/' . $reqName);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->ch, CURLOPT_HEADER, 0);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_HTTPGET, 0);

        // Timeout in seconds
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($this->ch);
        $info = curl_getinfo($this->ch);

        return $response;
    }
    public function sendGetRequest($dataRaw,$reqName){

        //$data = array('val1' => "val1", 'val2' => "val2", 'val3' => "val3");
        $data =  http_build_query($dataRaw);
        
        curl_setopt($this->ch, CURLOPT_URL, $this->serviceUrl.'/'.$reqName.'?'.$data);
        curl_setopt($this->ch, CURLOPT_HEADER, 0);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_POST, 0);
        curl_setopt($this->ch, CURLOPT_HTTPGET, 1);

        // Timeout in seconds
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($this->ch);
        $info = curl_getinfo($this->ch);

        return $response;
    }
    public function sendEmptyGetReq($reqName){
        
        curl_setopt($this->ch, CURLOPT_URL, $this->serviceUrl.'/'.$reqName);
        curl_setopt($this->ch, CURLOPT_HEADER, 0);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_POST, 0);
        curl_setopt($this->ch, CURLOPT_HTTPGET, 1);

        curl_setopt($this->ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($this->ch);
        $info = curl_getinfo($this->ch);

        return $response;
    }
    public function __destruct(){
        if(gettype($this->ch) == 'resource') curl_close($this->ch);
        //curl_close($this->ch);
        $this->serviceUrl = "";
    }
}
