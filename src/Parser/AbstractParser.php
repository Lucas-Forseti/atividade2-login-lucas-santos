<?php


namespace Forseti\Bot\PontoLogin\Parser;


use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;
    public function __construct($htmlPagina)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($htmlPagina);
    }
}