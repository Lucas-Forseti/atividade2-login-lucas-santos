<?php


namespace Forseti\Bot\PontoLogin\PageObject;


use Forseti\Bot\PontoLogin\Enums\Url;
use Forseti\Bot\PontoLogin\Parser\TokenParser;

class LogadaPageObject extends AbstractPageObject
{
    public function getResponse()
    {
        return $this->client->request('POST', Url::LOGIN, [
            'form_params' => [
                '_token' => $this->getParserToken()->getToken(),
                'email' => 'lucas.santos@forseti.com.br',
                'password' => 'forseti2408'
            ]
        ]);
    }

    public function getHtml()
    {
        return $this->getResponse()->getBody()->getContents();
    }

    public function getParserToken()
    {
        return new TokenParser((new DeslogadaPageObject())->getHtml());
    }
}