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
	 * Modell initialisieren
	 * 
	 */
	public function __construct() {
		
		$this->model = new \Model\User();
		
		parent::__construct();
	
	}
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		$this->view->setTemplate('admin_user');
		$this->view->assign('users', $this->model->getUsers());
		
		$this->view->display();
		
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