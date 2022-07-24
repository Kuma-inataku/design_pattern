<?php

class Roster
{
    protected $userList = [];

    public function setUserList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }
}
