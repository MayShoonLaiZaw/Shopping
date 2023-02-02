<?php
 header("Content-type:application/json");
require_once "init/classes/Comments.php";
$comments = new Comments;
echo $comments->insertComments($_POST);