<?php

class KommentierenController {
	
	public function __construct()
	{
		$view = new View('headerLogout', array('title' =>'Kommentieren', 'heading' => 'Was denkst du ueber diesen Bild?'));
		$view->display();
	}
	
	public function index()
	{
		
		$view = new View('menu');
		$view->display();
		
		$view = new View('textareakommentar');
 		$view->display();
		
		$view = new View('bilder');
		$view->display();
		
		
		
	
	}
		
	public function __destruct()
	{
		$view = new View('footer');
		$view->display();
	}		
}
