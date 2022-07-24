<?php

require('RosterClient.php');
require('UsersAggregate.php');

$users = [
    ["name" => "name 01", "age" => 20],
    ["name" => "name 02", "age" => 21],
    ["name" => "name 03", "age" => 22],
    ["name" => "name 04", "age" => 23]
];
$list = new RosterClient(new UsersAggregate($users));

echo $list->getUsers();