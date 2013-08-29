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
		
		$this->Index_Action();
		
	}
	
	/**
	 * 
	 * Umfragen loeschen
	 * 
	 */
	public function Delete_Action() {
		
		$this->Index_Action();
		
	}
}
?>