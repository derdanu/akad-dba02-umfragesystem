<?php
namespace Controller\Admin;

/**
 * 
 * Admin Base Controller
 * 
 * 
 */
class Base {
	
	/** 
	 * 
	 * Im Konstruktur generell ueberpruefen ob 
	 * sich der User eingeloggt hat.
	 * 
	 */
	public function __construct() {
		
		\Session::isUserAuthedCheck();
		
	}
	
}
?>