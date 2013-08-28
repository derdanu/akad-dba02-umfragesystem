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
		
		$stmt = $this->dbh->prepare("SELECT ID, Name FROM SurveyItems WHERE SurveyID = :id");
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
		
		return 564;
		
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
		
		return (array(232 => "Antwort 1", 332 => "Antwort 2"));
		
	}
	
	/**
	 * 
	 * Statistiken holen
	 * 
	 */
	public function getStats() {
		
		$stat[survey_cnt] = 17;
		$stat[record_cnt] = 343;
		
		return $stat;
	}
}


?>
