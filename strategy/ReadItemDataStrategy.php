<?php

abstract class ReadItemDataStrategy
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getData() :array
    {
        if (! is_readable($this->getFilename())) {
            throw new Exception('file ['.$this->getFilename().'] is not readable');
        }

        return $this->readData($this->getFilename());
    }

    public function getFilename() :string
    {
        return $this->filename;
    }

    protected abstract function readData($filename) : array;
}