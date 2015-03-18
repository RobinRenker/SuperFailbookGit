<?php

require_once('lib/Model.php');
class UserModel extends Model
{
    protected $tableName = 'user';

    public function  create($vorname, $nachname, $alter, $email, $Telefon , $Beruf ,$password)
    {
        $password = sha1($password);

		

        $query = "INSERT INTO $this->tableName (Name, Vorname, age, EMail, Telefon, Beruf, Passwort) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ssissss', $nachname, $vorname, $alter ,$email, $Telefon , $Beruf , $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }
    }
}
