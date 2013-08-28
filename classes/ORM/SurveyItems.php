<?php
namespace ORM;

/**
 * 
 * Objekt Relationen Abbildung für die Umfragen
 * 
 */
class SurveyItem extends Base {
	
	// Mapping der Datenbank Attribute
	protected $id;
	protected $survey_id;
	protected $name;
	
	/**
	 * 
	 * Definieren der Abstrakten Funktion 
	 * 
	 * @return	Object	PDF Statement
	 * 
	 */
	protected function getInsertStmt() {

		$stmt = $this->dbh->prepare("INSERT INTO survey_items (name, survey_id) VALUES (:name, :survey_id)");
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':survey_id', $this->survey_id);		
	
		return $stmt;
				
	}
}
?>
