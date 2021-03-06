<?php
// require 'Interfaces/FactoryInterface.php';

class LaravelFactory implements FactoryInterface
{
    public function engine()
    {
        return new LaravelEngine();
    }

    public function tire()
    {
        return new LaravelTire();
    }

    public function handle()
    {
        return new LaravelHandle();
    }
}
