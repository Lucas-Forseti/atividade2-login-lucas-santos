<?php

use Forseti\Bot\PontoLogin\PageObject\DeslogadaPageObject;
use Forseti\Bot\PontoLogin\PageObject\LogadaPageObject;
use Forseti\Bot\PontoLogin\Parser\TabelaParser;

require __DIR__ . '/../vendor/autoload.php';

$paginaDeslogada = new DeslogadaPageObject();
//var_dump($paginaDeslogada->getHtml());

$htmlPagina = $paginaDeslogada->getHtml();
//var_dump($htmlPagina);

$paginaLogada = new LogadaPageObject();
//var_dump($paginaLogada->getHtml());

$tabelaParser = new TabelaParser($paginaLogada->getHtml());
$objeto = $tabelaParser->getIterator()->current();

echo "Horário de entrada: " . $objeto->inicio . PHP_EOL;
echo "Horário de intervalo: " . $objeto->intervalo . PHP_EOL;
echo "Retorno de intervalo: " . $objeto->voltaIntervalo. PHP_EOL;
echo "Horário de saída: " . $objeto->saida . PHP_EOL;
