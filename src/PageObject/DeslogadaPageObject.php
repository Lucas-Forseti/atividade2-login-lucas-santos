<?php


namespace Forseti\Bot\PontoLogin\PageObject;


use Forseti\Bot\PontoLogin\Enums\Url;

class DeslogadaPageObject extends AbstractPageObject
{
    public function getResponse()
    {
        return $this->client->request('GET', Url::LOGIN);
    }

    public function getHtml()
    {
        return $this->getResponse()->getBody()->getContents();
    }
}