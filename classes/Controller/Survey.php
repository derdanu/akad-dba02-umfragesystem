<?php
namespace Controller;

/**
 * 
 * Umfrage Controller
 * 
 * 
 */
class Survey {
	
	private $view;
	private $model;
	private $survey;
	
	/**
	 * 
	 * Kontruktor
	 *  
	 */
	public function __construct() {

		$this->view = new \View();
		$this->model = new \Model\Survey();
		$this->survey = intval($_GET['survey']);
		
	}
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		


		if ($this->survey == 0) {
			
			$this->view->setTemplate('surveys');
			$this->view->assign('surveys', $this->model->getSurveys());
			$this->view->display();
						
		} else {

			$this->view->setTemplate('survey');
			$this->view->assign('survey_id', $this->survey);
			$this->view->assign('survey_name', $this->model->getSurveyName($this->survey));
			$this->view->assign('survey_items', $this->model->getSurveyItems($this->survey));
			$this->view->display();
	
			
		}
		
	}
	
	/**
	 * 
	 * Umfrage Ergebnisse speichern
	 * 
	 * 
	 * 
	 */
	public function Save_POST_Action() {

		//Speichern Wenn > 0
		
		$this->showSurveyResult();
				
	}
		
	/**
	 * 
	 * Umfrage Ergebnisse anzeigen
	 * 
	 * Direkt nur fuer Adminstratoren moeglich
	 * 
	 */		
	public function Show_Action() {
		
		if ($this->survey == 0) throw new \Exception("Illegaler Aufruf");
		
		\Session::isUserAuthedCheck();
		
		$this->showSurveyResult();
		
	}

	/**
	 * 
	 * Auswertung anzeigen
	 * 
	 */
	private function showSurveyResult() {
		
		$this->view->setTemplate('survey_result');
		$this->view->assign('survey_name', $this->model->getSurveyName($this->survey));
		$this->view->assign('survey_cnt', $this->model->getSurveyItemCount($this->survey));
		$this->view->assign('survey_result', $this->model->getSurveyResult($this->survey));
		$this->view->display();
		
	}		
		
}


?>
