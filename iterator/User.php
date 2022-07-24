<?php

class User
{
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        // ageを追加
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
