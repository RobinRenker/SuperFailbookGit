<?php

class UserErstellenController{


    public function index(){

        require_once('Model/UserModel.php');

        $vorname = $_POST['Vorname'];
        $nachname = $_POST['Nachname'];
        $alter = $_POST['Alter'];
        $email = $_POST['Email'];
        $telefon = $_POST['Telefon'];
        $beruf = $_POST['Beruf'];
        $passwort = $_POST['Passwort'];

        $usermodel = new UserModel();
        $usermodel->create($vorname,$nachname,$alter, $email, $telefon, $beruf, $passwort);



    }





}

