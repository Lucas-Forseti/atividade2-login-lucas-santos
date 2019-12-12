<?php


namespace Forseti\Bot\PontoLogin\Iterator;


class TabelaIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();

        $obj = new \stdClass();
        $obj->inicio = $node->getElementsByTagName('td')->item(0)->textContent;
        $obj->intervalo = $node->getElementsByTagName('td')->item(1)->textContent;
        $obj->voltaIntervalo = $node->getElementsByTagName('td')->item(2)->textContent;
        $obj->saida = $node->getElementsByTagName('td')->item(3)->textContent;

        return $obj;
    }
}