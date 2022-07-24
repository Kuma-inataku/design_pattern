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
            var_dump($user);
            echo sprintf('%s', $user);
            echo '<br>';
        }
    }
}
