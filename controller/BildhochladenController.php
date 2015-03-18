<?php 

class BildhochladenController {
	
	public function __construct()
	{
		$view = new View('headerLogout', array('title' =>'Bilder hochladen', 'heading' => 'Lade ein Bild hoch und beschreibe sie...'));
		$view->display();
	}
	
	public function index()
	{
		$view = new View('menu');
		$view->display();
		
		$view = new View('kommentarFeld', array('titel' => 'Name...', 'index' => 'Beschreibe dein Bild...'));
		$view->display();
		
		$view = new View('beschreiben');
		$view->display();
		
	}
	
	public function __destruct()
	{
		$view = new View('footer');
		$view->display();
	} 
}