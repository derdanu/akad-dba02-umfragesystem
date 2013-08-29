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

		if (!is_object($res)) return false;

		if ($res->Passwort == $pass) {
			
			$this->updateLastLogIn($user);
			return true;
			
		} else {
			
			return false;
			
		}
 
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
	
	/**
	 * 
	 * Benutzer löschen
	 * 
	 * @param	Integer	$id 	BenutzerID
	 * 
	 */
	public function deleteUser($id) {
		
		$stmt = $this->dbh->prepare("DELETE FROM User WHERE ID = :id");
		$stmt->bindParam(':id', $id);
	
		$stmt->execute();
		
	}
	
	/**
	 * 
	 * Benutzer hinzufügen
	 * 
	 * @param	String	$name	Benutzername
	 * @param	String 	$pass	Passwort
	 * 
	 */
	public function addUser($name, $pass) {
		
		$stmt = $this->dbh->prepare("INSERT INTO User SET Name = :name, Passwort = :pass");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':pass', $pass);
			
		$stmt->execute();
		
	}
	
	
	/**
	 * 
	 * Zeitstempel des letzten Logins vom User Updaten
	 * 
	 * @param	String	$user	Benutzername
	 * 
	 */
	private function updateLastLogIn($user) {

		$stmt = $this->dbh->prepare("UPDATE User SET LastLogIn = :lastlogin WHERE Name = :name");
		$stmt->bindParam(':name', $user);
		$stmt->bindValue(':lastlogin', date("Y-m-d H:i:s"));

		$stmt->execute();
			
	}
		
}


?>
