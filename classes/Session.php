<?php
/**
 * 
 * Session Klasse als Singleton Pattern
 * 
 * $session = \Session::getInstance();
 * $session->key = "value";
 * 
 * 
 * \Session::destroy();
 * 
 * 
 */
class Session {
	
	private $session = array();
	
	static private $instance = null;

	static public function getInstance() {
		if (null === self::$instance) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}

	private function __construct() {
		session_start();
	}
	
	private function __clone(){}

	public function __get($key) {
				
		if (array_key_exists($key, $_SESSION)) {
			return $_SESSION;
		} else {
			throw new Exception("Session Schluessel '$key' nicht verfuegbar");
		}
		
	}
	
	public function __set($key, $value) {
				
		$_SESSION[$key] = $value;
		
	}
	
	public static function authUser() {
		
		$_SESSION['__AUTH'] = 1;
		
	}
	
	public static function isUserAuthed() {
		
		if ($_SESSION['__AUTH'] == 1) return true;
		
		return false;
		
	}
	
	public static function destroy() {
		
		session_destroy();
		
	}

}