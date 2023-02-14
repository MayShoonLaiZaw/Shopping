<?php

require_once "DB.php";
class Auth extends DB{
    private $con;
    public function __construct(){
        $this->con = $this->connect();
    }
    public function sign_up($post):bool {
        if(isset($post['signup'])) {
            $username=$post['username'];
            $email=$post['email'];
            $password=$post['password'];
            $confirm_password=$post['confirm_password'];
            if($username == "") {
                echo "<p class='alert alert-danger'>Please Enter username</p>";
                return false;
            }
            if($email == "") {
                echo "<p class='alert alert-danger'>Please Enter email</p>";
                return false;
            }
            if($password == "") {
                echo "<p class='alert alert-danger'>Please Enter password</p>";
                return false;
            }
            if($confirm_password == "") {
                echo "<p class='alert alert-danger'>Please Enter confirm_password</p>";
                return false;
            }
            if(strlen($password) < 8) {
                echo "<p class='alert alert-danger'>Your password length must be greater than 8</p>";
                return false;
            }
            if($password != $confirm_password) {
                echo "<p class='alert alert-danger'>Your passwords didn't match</p>";
                return false;
            }
            $fetchsql = "SELECT Count(*) AS count FROM tbl_users WHERE email=:email";
            $fetchstmt = $this->con->prepare($fetchsql);
            $fetchstmt->bindParam("email",$email,PDO::PARAM_STR);
            $fetchstmt->execute();
            $fetchres = $fetchstmt->fetch(PDO::FETCH_OBJ);
            if($fetchres->count > 0) {
                echo "<p class='alert alert-danger'>Your Email has already been used!!</p>";
                return false;
            }
            $created_at = date("Y-m-d H:i:s");
            $hash_password= password_hash($password , PASSWORD_BCRYPT);
            $sql = "INSERT INTO tbl_users(username,email,password,created_at) VALUES(:username,:email,:password,:created_at)";
            $stmt= $this->con->prepare($sql);
            $stmt->bindParam("username",$username,PDO::PARAM_STR);
            $stmt->bindParam("email",$email,PDO::PARAM_STR);
            $stmt->bindParam("password",$hash_password,PDO::PARAM_STR);
            $stmt->bindParam("created_at",$created_at,PDO::PARAM_STR);
            $stmt->execute();
            $_SESSION['email'] = $email;

           

            echo "<script>location.href='shopping_card.php'</script>";
            return true;
        }
        return false;
    }
    public function sign_in($post):bool {
        if(isset($post['signin'])) {
            $email=$post['email'];
            $password=$post['password'];
            if($email == "") {
                echo "<p class='alert alert-danger'>Please Enter email</p>";
                return false;
            }
            if($password == "") {
                echo "<p class='alert alert-danger'>Please Enter password</p>";
                return false;
            }
            if(strlen($password) < 8) {
                echo "<p class='alert alert-danger'>Your password length must be greater than 8</p>";
                return false;
            }
            $sql = "SELECT email,password FROM tbl_users WHERE email=:email";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("email",$email,PDO::PARAM_STR);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            if($res == "") {
                echo "<p class='alert alert-danger'>Your email is invalid</p>";
                return false;
            }
            if($res->email != $email) {
                echo "<p class='alert alert-danger'>Your email is invalid</p>";
                return false;
            }
            if(!password_verify($password,$res->password)) {
                echo "<p class='alert alert-danger'>Your password is invalid</p>";
                return false;
            }
            $_SESSION['email'] = $email;
            echo "<script>location.href='shopping_card.php'</script>";
            return true;
        }
        return false;
    }
    public function sign_out():bool {
        session_destroy();
        return true;
    }
}
?>