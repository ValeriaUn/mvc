<?php

namespace app\models;

use app\models\Users;

class Websites
{

    public function listOfWebsites()
    {
        return [
            (object)[
                'id' => 1,
                'user_id' => 1,
                'name' => 'google.com',
            ],
            (object)[
                'id' => 2,
                'user_id' => 1,
                'name' => 'yahoo.com',
            ],
            (object)[
                'id' => 3,
                'user_id' => 2,
                'name' => 'yandex.ru',
            ],
            (object)[
                'id' => 4,
                'user_id' => 3,
                'name' => 'rambler.ru',
            ],
        ];
    }

    public function getWebsitesListByUser($user_id)
    {
        $websites = $this->listOfWebsites();
        $count = 0;
        
        foreach ($websites as $webs) {

            if ($webs->user_id == $user_id) {

                $count += 1;

            }

        }
        return $count;
    }

    public function websitesByUserId($userId)
    {        
        $websites = $this->listOfWebsites();
        $listOfWeb = null;
        
        foreach ($websites as $web) {

            if ($web->user_id == $userId) {

                $listOfWeb []= $web;

            }

        }

        return $listOfWeb;
    }

}