<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Users;
use app\models\Websites;

class IndexController extends Controller
{

	public function indexAction ()
	{
		$users = new Users();

		$userList = $users->listOfUsersWithWebsites();

		return $this->render('index/index', [
			'users' => $userList,
			]);

	}

	public function salariesAction ()
	{
		$users = new Users();

		if (isset($_POST['minSalary']) && is_numeric($_POST['minSalary'])) {

			$minSalary = $_POST['minSalary'];

		} else {

			$minSalary = 0;

		}

		$greatterThan = $users->usersWithSalaryGreatterThan($minSalary);

		return $this->render('salaries/index', [
			'greatterThan' => $greatterThan,
			'minSalary' => $minSalary
			]);

	}

	public function websitesAction ()
	{
		$webs = new Websites();
		$webList = $webs->listOfWebsites();

		return $this->render('websites/index', [
			'webs' => $webList
			]);

	}

	public function userwebsitesAction ()
	{
		$webs = new Websites();
		$users = new Users();

		if (!isset($_GET['userId'])) {

			return 'There are no users ID.';

		} 

		$user_id = $_GET['userId'];
		
		$userById = $users->getUserById($user_id);

		$usersWeb = $webs->websitesByUserId($user_id);

		if (!is_object($userById)){

			return 'No such user.';

		}

		return $this->render('userwebsite/index', [
			'usersWeb' => $usersWeb,
			'userInfo' => $userById
			]);

	}
	
}