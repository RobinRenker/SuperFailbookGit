<?php

class ProfilBearbeitenController {
	
	public function __construct()
	{
		$view = new View('headerLogout', array('title' =>'Profil', 'heading' => 'Dein Profil'));
		$view->display();
	}
	
	public function index()
	{
		
		$view = new View('menu');
		$view->display();
		
		$view = new View('profilBearbeiten');
		$view->display();
		
	
	}
		
	public function __destruct()
	{
		$view = new View('footer');
		$view->display();
	}		
}
