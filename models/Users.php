<?php

namespace app\models;

class Users
{
    public $websitesModel;

    public function __construct()
    {

        $this->websitesModel = new Websites();

    }

    public function listOfUsers()
    {

        $users = json_decode(file_get_contents(__DIR__.'/users.json'));

        return $users;
    }

    public function usersWithSalaryGreatterThan($minSalary)
    {
        $users = $this->listOfUsers();
        $greatterThan = [];

        foreach ($users as $user) {

            if ($user->salary >= $minSalary) {

                $greatterThan []= $user;

            } 
        }

        return $greatterThan;
    }

    public function listOfUsersWithWebsites() : array 
    {
        $users = $this->listOfUsers();

        foreach ($users as &$user) {
            
            $user->websCount = $this->websitesModel->getWebsitesListByUser($user->id);

        }
        
        return $users;
    }

    public function getUserById($userId)
    {
        $users = $this->listOfUsers();
        $userInfo = null;

        foreach ($users as $user) {

            if ($user->id == $userId) {

                $userInfo = $user;
            }
        }

        if(!is_object($userInfo)) {

            return false;

        }

        return $userInfo;
    }

    
}