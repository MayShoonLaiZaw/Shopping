<?php
class DB{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname="shoppingtemplate";

    protected function connect() {
        try{
            $con=new PDO("mysql:host=$this->host; dbname=$this->dbname",$this->username,$this->password);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>