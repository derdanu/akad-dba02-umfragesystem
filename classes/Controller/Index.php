<?php
namespace Controller;

/**
 * 
 * Index Controller
 * 
 * Wird default immer Aufgerufen 
 * 
 */
class Index {
	
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
