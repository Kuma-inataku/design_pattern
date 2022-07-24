<?php

require('UsersAggregateInterface.php');

class RosterClient
{
    private $userIterator;

    public function __construct(UsersAggregateInterface $user_list)
    {
        $this->userIterator = $user_list->createIterator();
    }

    public function getUsers()
    {
        while ($this->userIterator->hasNext()) {
            $user = $this->userIterator->next();
            // echo sprintf('%s', $user);
            echo sprintf("%s (%s)", $user['name'], $user['age']);
            echo '<br>';
        }
    }
}
