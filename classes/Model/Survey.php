<?php
namespace Model;

/**
 * 
 * Umfrage Datenmodell
 * 
 */
class Survey {


	public function getSurveys() {
		
		return array(1 => "Umfrage 1", 2 => "Umfrage 2");
		
	}
	
	public function getSurveyName($survey) {
		
		return "Name der Umfrage $survey";
		
	}
	
	public function getSurveyItems($survey) {
		
		return (array(10 => "Antwort 1", 11 => "Antwort 2"));
		
	}

	public function getSurveyResult($survey) {
		
		return (array(20 => "Antwort 1", 80 => "Antwort 2"));
		
	}
	
}


?>
