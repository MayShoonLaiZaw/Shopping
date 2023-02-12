<?php
require_once "DB.php";
class Auth extends DB{
    private $con;
    public function __construct(){
        $this->con = $this->connect();
    }
    public function sign_up() {
        
    }
}
?>