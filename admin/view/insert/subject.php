<?php
include('../../controller/controller.php');
$con= new Controller();
$select=$con->selectAll('tbl_course');
?>
<form method="post">
	Course Name:Field Name:<select name="coursename">
		<option>---</option>
		<?php
		foreach($select as $display){ ?>
		<option><?=$display['coursename']?></option>
	    <?php
	     }
		?>
		
	</select>
	<br>
	Subjects Name:<br><textarea name="subject" rows="15" cols="50" class="form-control"></textarea><br>
	
	
	    <input type="submit" name="submit" value="Submit" class="btn btn-md btn-success">         
</form>
<?php

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->insertRow('tbl_subject',$data);

}
?>