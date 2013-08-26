<?php
namespace Model;

/**
 * 
 * Benutzer Datenmodell
 * 
 */
class User {


	/**
	 * 
	 * Berechtigung überprüfen
	 * 
	 * @param	String	$user	Benutzername
	 * @param	String 	$pass	Passwort
	 * 
	 * @return	Boolean	
	 * 
	 */
	public function checkCredentials($user, $pass) {
		
		return true;
		
	}
	
	/**
	 * 
	 * Benutzer holen
	 * 
	 * @return	Array
	 * 
	 */
	public function getUsers() {
		
		return array("sepp" => "maier123", "franz" => "supersicher", "test" => "bass");
	}
		
}


?>
