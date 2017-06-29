<p>Minimal Salary:</p>
<form method="POST">
	<input type="text" name="minSalary" value="<?php echo $minSalary?>"/>
	<button type="submit">Enter</button>
</form>
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
	<?php foreach ($greatterThan as $user) {
		?>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td><?php echo $user->name; ?></td>
			<td><?php echo $user->job; ?></td>
			<td><?php echo $user->salary; ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>