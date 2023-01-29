<?php 
require_once "DB.php";
class Comments extends DB{
    private $con;
    public function __construct(){
        $this->con = $this->connect();
    }
    public function selectUser() {
        $sql = "SELECT * FROM tbl_users WHERE deleted_at IS NULL ORDER BY created_at DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res= $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function insertComments($post){
        // if(isset($_POST['sendnow'])) {   
            if($post['comments'] == "") {
                echo "Error!!";
                $response = [
                    "status"=> 500,
                    "message" => "Comment is Required!!"
                ];
                http_response_code(500);
                 echo json_encode($response);
            }

            $created_at = "Y-m-d H:i:s";
            $sql = "INSERT INTO tbl_comments(user_image,username,product_id,comments,created_at) VALUES(:user_image,:username,:product_id,:comments,:created_at)";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("user_image",$user_image, PDO::PARAM_STR);
            $stmt->bindParam("username",$username, PDO::PARAM_STR);
            $stmt->bindParam("product_id",$product_id, PDO::PARAM_INT);
            $stmt->bindParam("comments",$comments, PDO::PARAM_STR);
            $stmt->bindParam("created_at",$created_at, PDO::PARAM_STR);
            $stmt->execute();

            $response = [
                "status"=> 200,
                "message" => "success"
            ];
            http_response_code(200);
             echo json_encode($response);
            // return true;
        }
    //     return false;
    // }
}
?>