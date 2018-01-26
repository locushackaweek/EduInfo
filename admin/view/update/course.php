<?php
include('../../controller/controller.php');
$con= new Controller();
$id=$_GET['id'];
$select=$con->update('tbl_course','cid',$id);
$result=$con->selectAll('tbl_field');

foreach($select as $display){ 
?>
<form method="post" enctype="multipart/form-data">
  Course Name:<input type="text" name="coursename" value="<?=$display['coursename']?>"><br>
  Duration:<input type="text" name="duration" value="<?=$display['duration']?>"><br>
  Field Name:<select name="field">
         <option><?=$display['field']?></option>
         <?php
         foreach($result as $see){ ?>
          <option><?=$see['field']?></option>
            <?php
            }
          ?>
           </select>
         <br>
	Eligibility:<br><textarea name="eligibility" rows="15" cols="50" class="form-control"><?=$display['eligibility']?></textarea><br>
 Affiliated Colleges:<br><textarea name="affiliation" rows="15" cols="50" class="form-control"><?=$display['affiliation']?></textarea><br>
 Scope:<br><textarea name="scope" rows="15" cols="50" class="form-control"><?=$display['scope']?></textarea><br>
Alumni/User Review:<br><textarea name="alumni" rows="15" cols="50" class="form-control"><?=$display['alumni']?></textarea><br>
 
  
	
	
	<input type="submit" name="submit" value="Update" class="btn btn-md btn-success">
</form>

<?php
}

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->updateRow('tbl_course',$data,'cid',$id);
    header('location:../select/course.php');
}
?>