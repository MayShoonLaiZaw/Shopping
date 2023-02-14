<?php 
require_once "init/init.php";
require_once "init/classes/Auth.php";
$auth = new Auth;
if($auth->sign_out()) {
    echo "<script>location.href='signIn.php'</script>";
}
?>