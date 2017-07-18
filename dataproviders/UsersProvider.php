<?php 

class UserProvider extends DataProvider
{

	protected function readData() {

	    $users = json_decode(file_get_contents(realpath('../core/users.json')));

        return $users;
	}

}

?>