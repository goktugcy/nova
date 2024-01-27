<?php

namespace App\Core;

class Data
{
    public $status;
    public $body;
    public function __construct($method, $url, $params = null)
    {
        $client = new \GuzzleHttp\Client();
        if ($params !== null){
            $response = $client->request($method, $url, $params);
        }else{
            $response = $client->request($method, $url);
        }
        $this->body = $response->getBody();
        $this->status = $response->getStatusCode();
    }
}