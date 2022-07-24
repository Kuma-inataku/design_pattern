<?php

require 'App/Cars/Factories/LaravelFactory.php';
require 'App/Cars/Factories/Interfaces/FactoryInterface.php';

$car_model = [
    1 => 'laravel',
    2 => 'cakephp'
];

$target = $car_model[1];
// $target = $car_model[rand(1, 2)];

if ($target == 'laravel') {
    $model = new LaravelFactory();
}
// if ($target == 'cakephp') {
//     $model = new CakephpFactory();
// }

echo sprintf('<h1>Car model: %s</h1>', $target);

$engine = $model->engine();
$engine->add();

$tire = $model->tire();
$tire->add();

$handle = $model->handle();
$handle->add();
