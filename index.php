<?php

require_once('lib/Dispatcher.php');
require_once('lib/View.php');
require_once('lib/Model.php');
/*require_once('lib/formbuilder/FormBuilder.php');*/

$dispatcher = new Dispatcher();
$dispatcher->dispatch();

/*
require_once('Model/UserModel.php');
$usermodel = new UserModel();
$usermodel->create("Robin", "Renker", 16, "lol.renker@lololo.ch", "07999999","farmer", "123");*/





