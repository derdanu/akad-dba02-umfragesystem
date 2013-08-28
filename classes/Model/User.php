<?php
namespace Model;

/**
 * 
 * Benutzer Datenmodell
 * 
 */
class User extends Base {


	/**
	 * 
	 * Berechtigung ueberprüfen
	 * 
	 * @param	String	$user	Benutzername
	 * @param	String 	$pass	Passwort
	 * 
	 * @return	Boolean	
	 * 
	 */
	public function checkCredentials($user, $pass) {

		if (empty($user) || empty($pass)) return false;
		
		$stmt = $this->dbh->prepare("SELECT Passwort FROM User WHERE Name = :name");
		$stmt->bindParam(':name', $user);
	
		$stmt->execute();
		$res = $stmt->fetchObject();

 		return ($res->Passwort == $pass);
 
	}
	
	/**
	 * 
	 * Benutzer holen
	 * 
	 * @return	Array
	 * 
	 */
	public function getUsers() {

		$stmt = $this->dbh->query("SELECT ID, Name, LastLogIn FROM User");
		return 	$stmt->fetchAll();	
		
	}
		
}


?>
