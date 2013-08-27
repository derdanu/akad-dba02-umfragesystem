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
		
		return array("sepp" => date("d.m.Y H:i", time()), "franz" => date("d.m.Y H:i", time()), "test" => date("d.m.Y H:i", time()));
	}
		
}


?>
