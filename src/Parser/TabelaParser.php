<?php


namespace Forseti\Bot\PontoLogin\Parser;


use Forseti\Bot\PontoLogin\Iterator\TabelaIterator;

class TabelaParser extends AbstractParser
{
    public function getIterator()
    {
        $tabela = $this->crawler->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr');
        return new TabelaIterator($tabela);
    }
}