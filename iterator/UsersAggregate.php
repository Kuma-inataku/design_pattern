<?php

class UsersAggregate implements UsersAggregateInterface
{
    private $userList;

    function __construct($users)
    {
        $this->userList = $users;
    }

    public function addUserList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList; 
    }

    public function createIterator()
    {
        return new UserListIterator($this->userList);
    }
}
