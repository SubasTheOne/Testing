<?php
include ("classes/class.user.php");
$id=$_GET['id'];
$n=new user();
$n->deleteUser($id);
header("location:user.php");


?>