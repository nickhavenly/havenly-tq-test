<?php

namespace Havenly;
require('./UsersInfo.php');

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

$usersInfo = new \UsersInfo($users);

// 1. Get All User Names
echo '-------Names--------' . PHP_EOL;
print_r($usersInfo->getAllUserNames()); // ['Thor', 'Odin', 'Loki']
echo PHP_EOL;

// 2. Validate that you can get the existing information you need
echo '-------Location--------' . PHP_EOL;
echo'Odin is currently in: '. $usersInfo->getLocation('Odin') . PHP_EOL; // Should equal "Norway"
echo PHP_EOL;

// 3 Get the specific time information from a DateTime Object.
echo '-------Birthday--------' . PHP_EOL;
echo 'Thor was born on: ' . $usersInfo->getBirthDay('Thor') . PHP_EOL; // Should be March 19, 1200
echo PHP_EOL;

// 4. Validate that you can add a new user then retrieve existing information
echo '-------Add User--------' . PHP_EOL;
$newUser = [
    'name' => 'Hela',
    'location' => 'Valhalla',
    'birtday' => new \DateTime('5/5/1100', new \DateTimeZone('UTC')),
];
$usersInfo->addUser($newUser);
print_r($usersInfo->getAllUserNames()); // ['Thor', 'Odin', 'Loki', 'Hela']
echo PHP_EOL;

// 5 BONUS. Validate that you can modifiy user information and that it properly saves
echo '-------Bonus--------' . PHP_EOL;
$usersInfo->setNewLocation('Loki', 'Spain');
print_r($usersInfo->getLocation('Loki')); // Should be "Spain"
echo PHP_EOL;
