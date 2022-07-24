<?php

require('RosterClient.php');
require('UsersAggregate.php');

$users = [ "name 01", "name 02", "name 03", "name 04", "name 05" ];
$list = new RosterClient(new UsersAggregate($uses));

echo $list->getUsers();