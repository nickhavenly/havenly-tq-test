<?php 

class UserInfo {
  protected $users;
  
  public function __construct($users)
  {
    $this->users = $users;
  }
  
  public function getAllUserNames()
  {
    $userNames = [];
    
    foreach ($this->users as $user) {
      $userNames[] = $user['name'];
    }
    
    return $userNames;
  }
  
  // Returns Formatted String
  public function getBirthDay($name)
  {
    /* 
      Here's some documentation to get you started
      http://php.net/manual/en/class.datetime.php
    */
  }
  
  // Returns Location String
  public function getLocation($name)
  {

  }  
  
  //Adds user to the current set of users 
  // Returns null
  public function addUser($newUser)
  {

  }
    
  // Finds the correct user and sets them to the 
  public function setNewLocation($userName, $newLocation)
  {

  }
}
