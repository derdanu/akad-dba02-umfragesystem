<?php
namespace Model;

/**
 * 
 * Benutzer Datenmodell
 * 
 */
class User {


	public function checkCredentials($user, $pass) {
		
		return true;
		
	}
	
	public function getUsers() {
		
		return array("sepp" => "maier123", "franz" => "supersicher", "test" => "bass");
	}
		
}


?>
