<?php
namespace ORM;

/**
 * 
 * Objekt Relationen Abbildung für die Umfragen
 * 
 */
class Survey extends Base {
	
	// Mapping der Datenbank Attribute
	protected $id;
	protected $name;
	
	/**
	 * 
	 * Definieren der Abstrakten Funktion 
	 * 
	 * @return	Object	PDF Statement
	 * 
	 */
	protected function getInsertStmt() {

		$stmt = $this->dbh->prepare("INSERT INTO survey (name) VALUES (:name)");
		$stmt->bindParam(':name', $this->name);
	
		return $stmt;
				
	}
}
?>
