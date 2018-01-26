<?php
include('../../controller/controller.php');
$con= new Controller();
$select=$con->selectAll('tbl_field');
?>
<form method="post">
	Course Name:<input type="text" name="coursename"><br>
	Duration:<input type="text" name="duration"><br>
	Field Name:<select name="field">
		<option>---</option>
		<?php
		foreach($select as $display){ ?>
		<option><?=$display['field']?></option>
	    <?php
	     }
		?>
		
	</select>
	<br>
	Eligibility:<br><textarea name="eligibility" rows="15" cols="50" class="form-control"></textarea><br>
	Affiliated Colleges:<br><textarea name="affiliation" rows="15" cols="50" class="form-control"></textarea><br>
	Scope:<br><textarea name="scope" rows="15" cols="50" class="form-control"></textarea><br>
	Alumni/User Review:<br><textarea name="alumni" rows="15" cols="50" class="form-control"></textarea><br>
	
	
	    <input type="submit" name="submit" value="Submit" class="btn btn-md btn-success">         
</form>
<?php

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->insertRow('tbl_course',$data);

}
?>