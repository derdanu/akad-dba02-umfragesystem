<?php
namespace Controller;

use \CustomException as Ex;

/**
 * 
 * Login Controller
 * 
 * 
 */
class UserSession {
	
	
	/**
	 * 
	 * Verarbeitung der Logindaten
	 * 
	 */
	public function Login_POST_Action() {
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$model = new \Model\User();
			
		if ($model->checkCredentials($user, $pass)) {

			\Session::authUser();
			\Redirect::toController("Index");

		} else {
		
			throw new Ex\InvalidUserPassException();
			
		}

		
	}
	
	/**
	 * 
	 * Logout Action
	 * 
	 */
	public function Logout_Action() {

		\Session::destroy();
		\Redirect::toController("Index");
		
	}
		
}


?>
