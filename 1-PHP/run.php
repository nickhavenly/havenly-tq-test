<?php

namespace Havenly;
require('./UserInfo.php');

// Here is the list of users that we want to retrieve.
$users = [
  [
    'name' => 'Thor',
    'location' => 'Ragnarok',
    'birthday' => new \DateTime("3/19/1200", new \DateTimeZone('UTC')),
  ],
  [
    'name' => 'Odin',
    'location' => 'Norway',
    'birthday' => new \DateTime("1/3/1000", new \DateTimeZone('UTC')),
  ],
  [
    'name' => 'Loki',
    'location' => 'Unknown',
    'birthday' => new \DateTime("12/12/1210", new \DateTimeZone('UTC')),
  ]
];

$userInfo = new \UserInfo($users);

// Here's an example to get you started.
print_r($userInfo->getAllUserNames());

// There are three types of functions to create in this gmp_testbit
// 1. Validate that you can get the existing information you need
echo'Odin is currently in: '. $userInfo->getLocation('Odin'); // Should equal "Norway"
echo PHP_EOL;
// 1.5 Get the specific time information from a DateTime Object.
echo 'Thor was born on : ' . $userInfo->getBirthDay('Thor'); // Should be March 19, 1200
echo PHP_EOL;

$newUser = [
    'name' => 'Hela',
    'location' => 'Valhalla',
    'birtday' => new \DateTime('5/5/1100', new \DateTimeZone('UTC')),
];

// 2. Validate that you can add a new user
// and then retrieve existing information
$userInfo->addUser($newUser);
print_r($userInfo->getAllUserNames()); // ['Thor', 'Odin', 'Loki', 'Hela']


// 3 BONUS. Validate that you can modifiy user information
// Check out Assignment by reference in
// http://php.net/manual/en/language.operators.assignment.php
// And that it properly saves
$userInfo->setNewLocation('Loki', 'Spain');
print_r($userInfo->getLocation('Loki'));
echo PHP_EOL;

