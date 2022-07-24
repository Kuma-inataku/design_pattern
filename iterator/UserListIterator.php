<?php

class UserListIterator implements UserListIteratorInterface
{
    private $users;
    private $position = 0;

    function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext()
    {
        return isset($this->users[$this->position]);
    }

    public function next()
    {
        return $this->users[$this->position++];
    }
}
