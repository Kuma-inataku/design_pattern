<?php

require('User.php');
require('Roster.php');

$roster = new Roster();
$roster->setUserList(new User('name 01'));
$roster->setUserList(new User('name 02'));
$roster->setUserList(new User('name 03'));
$roster->setUserList(new User('name 04'));

foreach ($roster->getUserList() as $user) {
    echo $user->getName();
    echo '<br>';
}