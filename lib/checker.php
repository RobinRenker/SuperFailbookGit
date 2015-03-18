<?php

class Checker
{

    private $verboteneDinger = array("select", "delete", "alter", "from", "insert", "explain");

    private $verboteneDinger2 = array("(", ")", "!", "=", "<", ">", ";", ",");

    public function stringchecker($vorname, $nachname, $Beruf, $email)
    {

        //$zucheckende1 = $vorname . $nachname . $Beruf . $email;

        $rueckgabe = true;

        $zucheckende = $vorname. " ".$nachname." ".$Beruf." ".$email;

        //$zucheckende = strtolower($zucheckende1);

        $teile = str_split($zucheckende);

        foreach ($teile as $element) {
            if (in_array($element, $this->verboteneDinger2)) {
                $rueckgabe = true;

            }
        }

        $teile2 = array($vorname, $nachname, $Beruf, $email);

        foreach ($teile2 as $element) {

            $element2 = strtolower($element);

            if (in_array($element2, $this->verboteneDinger)) {
                $rueckgabe = true;
            }
        }
        return $rueckgabe;
    }

    public function anmeldeChecker($username, $passwort)
    {
        $rueckgabe = false;

        $username2 = $username . " " . $passwort;

        $geteilterUsername = explode(" ", $username2);

        foreach ($geteilterUsername as $element) {

            $element2 = strtolower($element);

            if (in_array($element2, $this->verboteneDinger2)) {
                $rueckgabe = true;

            }
        }

        $teileUsername = str_split($username2);

        foreach ($teileUsername as $element) {

            $element2 = strtolower($element);

            if (in_array($element2, $this->verboteneDinger2)) {
                $rueckgabe = true;

            }
        }
        return $rueckgabe;


    }

    public function kommentarChecker($titel, $kommentar)
    {

        $rueckgabe = false;

        $ganzerKommentar = $titel . " " . $kommentar;

        $geteilterGanzerKommentar = explode(" ", $ganzerKommentar);

        $einzelTeileGanzerKommentar = str_split($ganzerKommentar);

        foreach ($geteilterGanzerKommentar as $element) {

            $element2 = strtolower($element);

            if (in_array($element2, $this->verboteneDinger2)) {
                $rueckgabe = true;

            }
        }
        foreach ($geteilterGanzerKommentar as $element) {

            $element2 = strtolower($element);

            if (in_array($element2, $this->verboteneDinger2)) {
                $rueckgabe = true;

            }
        }
        return $rueckgabe;
    }


}

?>