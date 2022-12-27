<?php



class Dbh {
    //GENERALES
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";

    //ACCESS DATABASE
    private $dbName2 = "valerycake";
    protected function connectValery(){

        try
        {
            $dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName2, $this->user, $this->pwd,);
            $dbh-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
        }
        catch (PDOException $e)
        {
            exit("Error: ".$e->getMessage());
        }
    }



}