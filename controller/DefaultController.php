<?php

class DefaultController
{
	public function __construct()
	{
		$view = new View('headerLogin', array('title' => 'Failbook', 'heading' => 'Willkommen auf SuperFailbook'));
		$view->display();
	}

	public function index()
	{

		$view = new View('kommentarFeld', array('titel' => 'Registrieren sie sich', 'index' => 'Es wäre die beste Entscheidung ihres Lebens.'));
		$view->display();

		$view = new View('registrieren');
		$view->display();
		
	}

	public function __destruct()
	{
		$view = new View('footer');
		$view->display();
	}
}
