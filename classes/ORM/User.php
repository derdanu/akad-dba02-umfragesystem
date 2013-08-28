<?php
namespace ORM;

/**
 * 
 * Objekt Relationen Abbildung für die Umfragen
 * 
 */
class User extends Base {
	
	// Mapping der Datenbank Attribute
	protected $id;
	protected $username;
	protected $password;
	protected $lastonline;
	
	/**
	 * 
	 * Definieren der Abstrakten Funktion 
	 * 
	 * @return	Object	PDF Statement
	 * 
	 */
	protected function getInsertStmt() {

		$stmt = $this->dbh->prepare("INSERT INTO user (name, pass) VALUES (:name, :pass)");
		$stmt->bindParam(':name', $this->username);
		$stmt->bindParam(':pass', $this->password);
	
		return $stmt;
				
	}
	
}
?>