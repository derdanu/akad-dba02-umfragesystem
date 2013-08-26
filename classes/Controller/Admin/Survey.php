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
		
		$view = new \View();
		$view->setTemplate('index');
		$view->display();
		
	}	
}
?>