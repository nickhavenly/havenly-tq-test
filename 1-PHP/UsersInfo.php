<?php

class UsersInfo
{
    const DATE_FORMAT = 'F j, Y';

    /**
     * @var array
     */
    protected $users = [];

    /**
     * UserInfo constructor.
     *
     * @param array $users
     */
    public function __construct(array $users)
    {
        foreach ($users as $user) {
            $this->users[$user['name']] = $user;
        }
    }

    /**
     * @return array
     */
    public function getAllUserNames()
    {
        // TODO: implement
    }

    /**
     * @param string $name
     *
     * @return string|null
     */
    public function getLocation($name)
    {
        // TODO: implement
    }

    /**
     * @param string $name
     *
     * @return null|string
     */
    public function getBirthDay($name)
    {
        // TODO: implement
    }

    /**
     * @param $newUser
     */
    public function addUser($newUser)
    {
        // TODO: implement
    }

    /**
     * @param $userName
     * @param $newLocation
     */
    public function setNewLocation($userName, $newLocation)
    {
        // TODO: implement
    }
}
