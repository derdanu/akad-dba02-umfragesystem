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
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		$model = new \Model\Survey();
		
		$view = new \View();
		$view->setTemplate('admin_surveys');
		$view->assign('surveys', $model->getSurveys());
		$view->display();
		
	}	
	
	/**
	 * 
	 * neue Umfragen hinzufügen
	 * 
	 */
	public function Add_POST_Action() {
		
		$this->Index_Action();
		
	}
}
?>