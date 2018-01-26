<?php

include('../../controller/controller.php');
$con= new Controller();
?>

     <table border="1" width="100%">
     <thead>
         <tr>
			<th>Id</th>
			<th>Field</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$result=$con->selectAll('tbl_field');
		foreach($result as $display){ 
		?>
		<tr>
			<td><?=$display['fid']?></td>
			<td><?=$display['field']?></td>
			<th><a href="../update/field.php?id=<?=$display['fid']?>">Update</a></th>
			<th><a href="../delete/delete.php?page=field&table=tbl_field&field=fid&id=<?=$display['fid']?>">Del</a></th>
		</tr>
		<?php } ?>
	</tbody>
</table>
