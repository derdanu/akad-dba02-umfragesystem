<?php
namespace Model;

/**
 * 
 * Umfrage Datenmodell
 * 
 */
class Survey extends Base{

	/**
	 * 
	 * Umfragen holen
	 * 
	 * @return	Array
	 * 
	 */
	public function getSurveys() {
		
		$stmt = $this->dbh->query("SELECT * FROM Survey");
		return $stmt->fetchAll();	
				
	}
	
	/**
	 * 
	 * Umfragename holen
	 * 
	 * @param	Integer	$survey	UmfrageId	
	 * 
	 * @return	String	Name der Umfrage
	 * 
	 */
	public function getSurveyName($survey) {
		
		$stmt = $this->dbh->prepare("SELECT Name FROM Survey WHERE ID = :id");
		$stmt->bindParam(':id', $survey);
		$stmt->execute();
		$res = $stmt->fetchObject();

 		return $res->Name;
		
	}
	
	/**
	 * 
	 * Umfrage Punkte holen
	 * 
	 * @param	Integer	$survey	UmfrageId	
	 * 
	 * @return	Array
	 * 
	 */
	public function getSurveyItems($survey) {
		
		$stmt = $this->dbh->prepare("SELECT ID, Name FROM SurveyItems WHERE SurveyID = :id ORDER BY Name");
		$stmt->bindParam(':id', $survey);
		$stmt->execute();
		
		return $stmt->fetchAll();

 		
		
	}

	/**
	 * 
	 * Anzahl der Abgegeben Umfragewerte
	 * 
	 * @param	Integer	$survey	UmfrageId	
	 * 
	 * @return	Integer	Anzahl der Ergebnisse zur Umfrage
	 * 
	 */
	public function getSurveyItemCount($survey) {
		
		$stmt = $this->dbh->prepare("SELECT COUNT(*) AS cnt FROM SurveyAnswer WHERE SurveyItemID IN (SELECT ID FROM SurveyItems WHERE SurveyID = :id)");
		$stmt->bindParam(':id', $survey);
		$stmt->execute();
		$res = $stmt->fetchObject();

 		return $res->cnt;
	
	}

	/**
	 * 
	 * Umfrage Ergebnisse holen
	 * 
	 * @param	Integer	$survey	UmfrageId	
	 * 
	 * @return	Array
	 */
	public function getSurveyResult($survey) {
		
		$stmt = $this->dbh->prepare("SELECT i.Name, COUNT(*) as cnt FROM SurveyItems i LEFT JOIN SurveyAnswer a ON i.ID = a. SurveyItemID WHERE i.SurveyID = :id GROUP BY Name ORDER BY i.Name");
		$stmt->bindParam(':id', $survey);
		$stmt->execute();
		
		return $stmt->fetchAll();
		
	}
	
	/**
	 * 
	 * Statistiken holen
	 * 
	 */
	public function getStats() {
		
		$stat = array();
					
		$stat['survey_cnt'] = $this->getTableCount("Survey");
		$stat['survey_items_cnt'] = $this->getTableCount("SurveyItems");
		$stat['answer_cnt'] = $this->getTableCount("SurveyAnswer");
		
		return $stat;
	}

	/**
	 * 
	 * Antworten Speichern
	 * 
	 * @param	Integer	$answerArr	Array mit den Antwort IDs
	 * 
	 */
	public function saveNewAnswers($answerArr) {

		$stmt = $this->dbh->prepare("INSERT INTO SurveyAnswer SET SurveyItemID = :id");
		
		foreach ($answerArr as $answer) {

			$stmt->bindParam(':id', $answer);
			$stmt->execute();
			
		}
	
	}
	
	/**
	 * 
	 * Anzahl der Tupel zurückgeben
	 * 
	 * @param	String	$table	Tabellenname
	 * 
	 * @return	Integer	Anzahl der Tupel
	 * 
	 */
	private function getTableCount($table) {
		
		
		switch ($table) {
			
			case "Survey":
			case "SurveyItems":	
			case "SurveyAnswer":
				$stmt = $this->dbh->query("SELECT COUNT(*) AS cnt FROM $table");
				return $stmt->fetchObject()->cnt;	
				break;	
			default:
				throw new \Exception("Illegaler Tabellenname $table");
				
		}
				
	}

}



?>
