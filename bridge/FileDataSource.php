<?php

require_once 'DataSource.php';

class FileDataSource implements DataSource
{
    private $source_name;
    private $handler;
    
    function __construct($source_name)
    {
        $this->source_name = $source_name;
    }

    public function open()
    {
        if (! is_readable($this->source_name)) {
            throw new Exception('データソースが見つかりません');
        }
        $this->handler = fopen($this->source_name, 'r');
        if (! $this->handler) {
            throw new Exception('データソースのオープンに失敗しました');
        }
    }

    public function read()
    {
        $buffer = [];
        while (! feof($this->handler)) {
            $buffer[] = fgets($this->handler);
        }

        return join($buffer);
    }

    public function close()
    {
        if (! is_null($this->handler)) {
            fclose($this->handler);
        }
    }
}