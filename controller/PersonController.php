<?php

class PersonController{

        public function index(){
                $name = $_POST["Vorname"];
                echo "Name: $name";
        }
}


