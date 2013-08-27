<?php
namespace Controller\Admin;

/**
 * 
 * Admin Statistik Controller
 * 
 * 
 */
class Stats {
	
	/** 
	 * 
	 * Im Konstruktur generell für diesen Controller 
	 * überprüfen ob sich der User eingeloggt hat.
	 * 
	 */
	public function __construct() {
		
		\Session::isUserAuthedCheck();
		
	}
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		$model = new \Model\Survey();
		
		$view = new \View();
		$view->setTemplate('admin_stats');
		$view->assign('stats', $model->getStats());
		$view->display();
		
	}	
}
?>