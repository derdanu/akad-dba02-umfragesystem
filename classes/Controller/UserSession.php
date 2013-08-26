<?php
namespace Controller;

/**
 * 
 * Login Controller
 * 
 * 
 */
class UserSession {
	
	
	/**
	 * 
	 * Login Formular anzeigen
	 * 
	 */
	public function Login_Action() {

		$view = new \View();
		$view->setTemplate('login');
		$view->display();

		
	}
	
	/**
	 * 
	 * Verarbeitung der Logindaten
	 * 
	 */
	public function Login_POST_Action() {
		
		$user = $_GET['user'];
		$pass = $_GET['pass'];
		
		$model = new \Model\User();
			
		if ($model->checkCredentials($user, $pass)) {

			\Session::authUser();
			\Redirect::toController("Index");

		} else {
		
			$this->Login_Action();			
			
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
