<?php


namespace Forseti\Bot\PontoLogin\PageObject;


use Forseti\Bot\PontoLogin\Singleton\GuzzleClientSingleton;
use Forseti\Bot\PontoLogin\Traits\ForsetiLoggerTraits;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractPageObject
{
    use ForsetiLoggerTraits;
    protected $client;
    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client == null) ? GuzzleClientSingleton::getInstance() : $client;
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (GuzzleException $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        } catch (\Exception $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        }
    }
}