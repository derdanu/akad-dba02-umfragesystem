<?php
namespace Controller\Admin;

/**
 * 
 * Admin Benutzer Controller
 * 
 * 
 */
class User {
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		$model = new \Model\User();
		
		$view = new \View();
		$view->setTemplate('admin_user');
		$view->assign('users', $model->getUsers());
		
		$view->display();
		
	}	
}
?>