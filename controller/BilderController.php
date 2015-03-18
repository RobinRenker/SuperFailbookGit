<?php 

class BilderController {
	
	public function __construct()
	{
		$view = new View('headerLogout', array('title' =>'Home', 'heading' => 'Was Neues...'));
		$view->display();
	}
	
	
	public function index() 
	{
		
		$view = new View('menu');
		$view->display();
		
 		$view = new View('kommentarFeld', array('titel' => 'Bild von...', 'index' => 'Beschreibung...'));
 		$view->display();
		
		$view = new View('bilder');
		$view->display();
		
		
 		$view = new View('kommentarFeld', array('titel' => 'Name...', 'index' => 'Dein Kommentar...'));
 		$view->display();
 		
	}
	

	public function __destruct()
	{
		$view = new View('footer');
		$view->display();
	}
	
	
}