<?php
include('../../controller/controller.php');
$con= new Controller();
$id=$_GET['id'];
$select=$con->update('tbl_subject','sid',$id);
$result=$con->selectAll('tbl_course');
foreach($select as $display){ 
?>
<form method="post" enctype="multipart/form-data">
  
  Course Name::<select name="coursename">
         <option><?=$display['coursename']?></option>
         <?php
         foreach($result as $see){ ?>
          <option><?=$see['coursename']?></option>
            <?php
            }
          ?>
           </select>
         <br>
  Subjects Name:<br><textarea name="subject" rows="15" cols="50" class="form-control"><?=$display['subject']?></textarea><br>
 	<input type="submit" name="submit" value="Update" class="btn btn-md btn-success">
</form>

<?php
}

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->updateRow('tbl_subject',$data,'sid',$id);
    header('location:../select/subject.php');
}
?>