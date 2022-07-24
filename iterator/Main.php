<?php

require('User.php');
require('Roster.php');

$roster = new Roster();
$roster->setUserList(new User('name 01', 20));
$roster->setUserList(new User('name 02', 21));
$roster->setUserList(new User('name 03', 22));
$roster->setUserList(new User('name 04', 23));

foreach ($roster->getUserList() as $user) {
    echo sprintf("%s (%d)", $user->getName(), $user->getAge());
    echo '<br>';
}