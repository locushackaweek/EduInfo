<?php

include('../../controller/controller.php');
$con= new Controller();
?>

     <table border="1" width="100%">
     <thead>
         <tr>
			<th>Id</th>
			<th>Course Name</th>
			<th>Duration</th>
			<th>Field</th>
			<th>Eligibility</th>
			<th>Affiliation</th>
			<th>Scope</th>
			<th>Alumni/User Review</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$result=$con->selectAll('tbl_course');
		foreach($result as $display){ 
		?>
		<tr>
			<td><?=$display['cid']?></td>
			<td><?=$display['coursename']?></td>
			<td><?=$display['duration']?></td>
			<td><?=$display['field']?></td>
			<td><?=$display['eligibility']?></td>
			<td><?=$display['affiliation']?></td>
			<td><?=$display['scope']?></td>
			<td><?=$display['alumni']?></td>
			<th><a href="../update/course.php?id=<?=$display['cid']?>">Update</a></th>
			<th><a href="../delete/delete.php?page=course&table=tbl_course&field=cid&id=<?=$display['cid']?>">Del</a></th>
		</tr>
		<?php } ?>
	</tbody>
</table>
