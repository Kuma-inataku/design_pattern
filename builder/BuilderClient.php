<?php

require 'Frameworks.php';
require 'FrameworksBuilderInterface.php';
require 'FrameworksDirector.php';
require 'FrameworksBuilder.php';

$builder = new FrameworksBuilder();
$json_path = 'frameworks.json';

$director = new FrameworksDirector($builder, $json_path);

$data = $director->getFrameworks();

foreach ($data as $d) {
    echo sprintf('<li>%s：%s [%s]</li>', $d->getId(), $d->getName(), $d->getCategory());
}

// var_dump($data);
// exit;