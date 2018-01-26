<?php
include('../../controller/controller.php');
$con= new Controller();
$id=$_GET['id'];
$select=$con->update('tbl_field','fid',$id);
foreach($select as $display){ 
?>
<form method="post" enctype="multipart/form-data">
  Field:<input type="text" name="field" value="<?=$display['field']?>"><br>
 	<input type="submit" name="submit" value="Update" class="btn btn-md btn-success">
</form>

<?php
}

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->updateRow('tbl_field',$data,'fid',$id);
    header('location:../select/field.php');
}
?>