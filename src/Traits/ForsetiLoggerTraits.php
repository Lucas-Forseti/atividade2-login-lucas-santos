<?php


namespace Forseti\Bot\PontoLogin\Traits;


use Forseti\Logger\Logger;
use Psr\Log\LoggerTrait;

trait ForsetiLoggerTraits
{
    use LoggerTrait;
    public function log($level, $message, array $context = array())
    {
        return (new Logger(get_class($this)))->log($level, $message, $context);
    }
}