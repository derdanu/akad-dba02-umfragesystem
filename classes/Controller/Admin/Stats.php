<?php
namespace Controller\Admin;

/**
 * 
 * Admin Statistik Controller
 * 
 * 
 */
class Stats extends Base {
	
	
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
		
		$this->view->setTemplate('admin_stats');
		$this->view->assign('stats', $this->model->getStats());
		$this->view->display();
		
	}	
}
?>