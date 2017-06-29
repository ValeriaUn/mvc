<p>Web sites:</p>
<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>User's ID</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($webs as $web) {
		?>
		<tr>
			<td><?php echo $web->id; ?></td>
			<td><?php echo $web->user_id; ?></td>
			<td><?php echo $web->name; ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>