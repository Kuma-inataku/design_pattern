<?php
// namespace App\Director;

// require 'FrameworksBuilder.php';

class FrameworksDirector
{
    private $builder;
    private $json;

    public function __construct(FrameworksBuilderInterface $builder, $json)
    {
        $this->builder = $builder;
        $this->json = $json;
    }

    public function getFrameworks()
    {
        $list = $this->builder->parse($this->json);
        return $list;
    }
}