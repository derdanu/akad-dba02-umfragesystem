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
		
		$conf = \Config::getInstance();
		
		$view = new \View();
		$view->setTemplate('bootstrap');
		$view->assign('controller', 'Hello vom Controller ' . get_class($this));
		$view->assign('config', 'Hello vom Controller und Config ' . $conf->website);
		$view->display();
		
	}	
}


?>
