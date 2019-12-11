<?php


namespace Forseti\Bot\PontoLogin\Singleton;


use GuzzleHttp\Client;

class GuzzleClientSingleton
{
    public static $instance;
    public static function getInstance($debug = false)
    {
        if (is_null(GuzzleClientSingleton::$instance)) {
            $config = [
                'debug' => $debug,
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36'
                ],
                'cookies' => true,
                'verify' => false
            ];
            return GuzzleClientSingleton::$instance = new Client($config);
        }
        return GuzzleClientSingleton::$instance;
    }
}