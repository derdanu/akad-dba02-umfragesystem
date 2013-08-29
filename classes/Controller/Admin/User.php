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
		
		if (isset($_POST['name']) && isset($_POST['pass'])) {

			$name = $_POST['name'];
			$pass = $_POST['pass'];

			$this->model->addUser($name, $pass);
			
			$this->Index_Action();
			
		} else {
			
			throw new \Exception("Illegaler Aufruf");
			
		}

		
	}
	
	/**
	 * 
	 * Benutzer loeschen
	 * 
	 */
	public function Delete_Action() {
		
		
		if (isset($_GET['user'])) {
			
			$id = intval($_GET['user']);

			if ($id > 0) {
				
				$this->model->deleteUser($id);
						
				$this->Index_Action();				
			
			} else {
				
				throw new \Exception("Illegaler Aufruf");
				
			}
						
	
		} else {
			
			throw new \Exception("Illegaler Aufruf");
			
		}
	}
}
?>