<?php

include('../../controller/controller.php');
$con= new Controller();
?>

     <table border="1" width="100%">
     <thead>
         <tr>
			<th>Id</th>
			<th>Course Name</th>
			<th>Subject</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$result=$con->selectAll('tbl_subject');
		foreach($result as $display){ 
		?>
		<tr>
			<td><?=$display['sid']?></td>
			<td><?=$display['coursename']?></td>
			<td><?=$display['subject']?></td>
			<th><a href="../update/subject.php?id=<?=$display['sid']?>">Update</a></th>
			<th><a href="../delete/delete.php?page=subject&table=tbl_subject&field=sid&id=<?=$display['sid']?>">Del</a></th>
		</tr>
		<?php } ?>
	</tbody>
</table>
