<?php


namespace Forseti\Bot\PontoLogin\Iterator;


class AbstractIterator implements \Countable, \Iterator
{
    protected $iterator;

    public function __construct($crawler)
    {
        $this->iterator = $crawler->getIterator();
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        // TODO: Implement current() method.
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->iterator->key();
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return $this->iterator->valid();
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->iterator->rewind();
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return $this->iterator->count();
    }
}