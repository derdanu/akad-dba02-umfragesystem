<?php
namespace Controller\Admin;

/**
 * 
 * Admin Benutzer Controller
 * 
 * 
 */
class User extends Base{
	
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
	
	/**
	 * 
	 * Benutzer hinzufuegen
	 * 
	 */
	public function Add_POST_Action() {
		
		$this->Index_Action();
		
	}
	
	/**
	 * 
	 * Benutzer loeschen
	 * 
	 */
	public function Delete_Action() {
		
		$this->Index_Action();
	}
}
?>