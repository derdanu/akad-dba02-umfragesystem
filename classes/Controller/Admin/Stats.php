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