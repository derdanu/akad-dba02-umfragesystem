<?php
namespace Controller\Admin;

/**
 * 
 * Admin Umfrage Controller
 * 
 * 
 */
class Survey {
	
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
}
?>