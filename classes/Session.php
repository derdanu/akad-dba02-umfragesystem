<?php

use \CustomException as Ex;

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
	
	/**
	 * 
	 * Getter Methode
	 * 
	 * @param	String	$key	Schlüssel
	 * 
	 * @return	String	Wert
	 * 
	 */
	public function __get($key) {
				
		if (array_key_exists($key, $_SESSION)) {
			return $_SESSION;
		} else {
			throw new Exception("Session Schluessel '$key' nicht verfuegbar");
		}
		
	}
	
	/**
	 * 
	 * Setter Methode
	 * 
	 * @param	String	$key	Schlüssel
	 * @param	String	$value	Wert
	 * 
	 */
	public function __set($key, $value) {
				
		$_SESSION[$key] = $value;
		
	}
	
	/**
	 * 
	 * Benutzer Authentifizeren
	 * 
	 */
	public static function authUser() {
		
		$_SESSION['__AUTH'] = 1;
		
	}
	
	/**
	 * 
	 * Überprüfen ob Benutzer Authentifiziert ist
	 * 
	 * @return	Boolean
	 * 
	 */
	public static function isUserAuthed() {
		
		if ($_SESSION['__AUTH'] == 1) return true;
		
		return false;
		
	}
	
	/**
	 * 
	 * Überprüfen ob Benutzer Authentifiziert ist
	 * 
	 * Ansonsten Exception werfen
	 * 
	 */
	public static function isUserAuthedCheck() {
		
		if (!self::isUserAuthed()) throw new Ex\UserNotAuthedException("Sie haben keine Berechtigung für diese Seite");
		
	} 
	
	/**
	 * 
	 * Session löschen
	 * 
	 */
	public static function destroy() {
		
		session_destroy();
		
	}

}