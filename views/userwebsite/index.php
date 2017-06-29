<p>Users sites:</p>
<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>User's ID</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($usersWeb as $webList) {?>
			<tr>
				<td><?php echo $webList->id; ?></td>
				<td><?php echo $webList->user_id; ?></td>
				<td><?php echo $webList->name; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php 
var_dump($userInfo);
?>
<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Job</td>
			<td>Salary</td>
		</tr>
	</thead>
	<tbody>
			<tr>
				<td><?php echo $userInfo->id; ?></td>
				<td><?php echo $userInfo->name; ?></td>
				<td><?php echo $userInfo->job; ?></td>
				<td><?php echo $userInfo->salary; ?></td>
			</tr>
	</tbody>
</table>