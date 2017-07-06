<?php

use 

class UserProvider extends DataProvider
{

	protected function readData($path) {

	    $users = json_decode(file_get_contents($path.'/users.json'));

        return $users;
	}

}

?>