<?php
namespace Controller;

/**
 * 
 * Login Controller
 * 
 * 
 */
class USerSession {
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 * Umleiten auf Login Formular
	 * 
	 */
	public function Index_Action() {
		
		$this->Login_Action();
		
	}
	
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
		
		$this->Index_Action();
		
	}
	
	/**
	 * 
	 * Logout Action
	 * 
	 */
	public function Logout_Action() {
		
		//Destroy Session
		//Redirect
		
	}
		
}


?>
