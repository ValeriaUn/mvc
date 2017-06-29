<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Job</td>
			<td>Salary</td>
			<td>Webs</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user) {
		?>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td><?php echo $user->name; ?></td>
			<td><?php echo $user->job; ?></td>
			<td><?php echo $user->salary; ?></td>
			<td><?php echo $user->websCount ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>