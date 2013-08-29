<?php
namespace Controller\Admin;

/**
 * 
 * Admin Umfrage Controller
 * 
 * 
 */
class Survey extends Base {
	
	/**
	 * 
	 * Modell initialisieren
	 * 
	 */
	public function __construct() {
		
		$this->model = new \Model\Survey();
		
		parent::__construct();
		
	}
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		$this->view->setTemplate('admin_surveys');
		$this->view->assign('surveys', $this->model->getSurveys());
		$this->view->display();
		
	}	
	
	/**
	 * 
	 * neue Umfragen hinzufuegen
	 * 
	 */
	public function Add_POST_Action() {
		
		if (isset($_POST['name']) && isset($_POST['answer'])) {

			$name = $_POST['name'];
			$answer_arr = $_POST['answer'];

			$this->model->addSurvey($name, $answer_arr);
			
			$this->Index_Action();
			
		} else {
			
			throw new \Exception("Illegaler Aufruf");
			
		}
		
	}
	
	/**
	 * 
	 * Umfragen loeschen
	 * 
	 */
	public function Delete_Action() {
		
		
		if (isset($_GET['survey'])) {
			
			$id = intval($_GET['survey']);

			if ($id > 0) {
				
				$this->model->deleteSurvey($id);
						
				$this->Index_Action();				
			
			} else {
				
				throw new \Exception("Illegaler Aufruf");
				
			}
						
	
		} else {
			
			throw new \Exception("Illegaler Aufruf");
			
		}
		
	}
}
?>