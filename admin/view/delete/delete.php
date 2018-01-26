<?php
include('../../controller/controller.php');
$con= new Controller();
$page=$_GET['page'];
$table=$_GET['table'];
$field=$_GET['field'];
$id=$_GET['id'];
$result=$con->delete($table,$field,$id);
header('location:../select/'.$page.'.php')
?>