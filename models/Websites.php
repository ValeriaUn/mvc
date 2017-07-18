<?php

namespace app\models;

include "dataproviders/WebsitesProvider.php";

use app\models\Users;

class Websites
{

    public $websitesProvider;

    public function __construct()
    {

        $this->websitesProvider = new WebsitesProvider();

    }

    public function listOfWebsites()
    {
        $websites = $this->websitesProvider->readData();

        return $websites;
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