<?php
require_once "DB.php";
class Products extends DB{
    private $con;
    public function __construct(){
        $this->con = $this->connect();
    }
    public function checkCategory() {
        $sql = "SELECT * FROM tbl_categories";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function checkCategory2() {
        $sql = "SELECT * FROM tbl_categories";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);
        return $res;
    }
    public function showProductsfirst($category) {
        // echo $category;
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 0,2";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showProductseight($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category  LIMIT 2,8";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showProductsecond($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 10,2";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showProductsfive($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 12,5";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showProductsfour($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 17,4";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showSpecial($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 21,1";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showLatest($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 22,1";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showPromotions($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 23,1";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function showSpecial2($category) {
        $sql = "SELECT * FROM tbl_clothes WHERE main_category=:main_category LIMIT 24,1";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("main_category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function fetchProducts(int $id){
        $sql = "SELECT * FROM tbl_clothes WHERE id=:id ";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);
        return $res;
    }
    public function fetchSameCategory(int $id, string $category){
        $sql = "SELECT * FROM tbl_clothes WHERE category_name=:category_name AND id!=:id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("id",$id,PDO::PARAM_INT);
        $stmt->bindParam("category_name",$category,PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
}
?>