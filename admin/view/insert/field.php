<?php
include('../../controller/controller.php');
$con= new Controller();
?>
<form method="post">
	Field:<input type="text" name="field"><br>
	
	    <input type="submit" name="submit" value="Submit" class="btn btn-md btn-success">         
</form>
<?php

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->insertRow('tbl_field',$data);

}
?>