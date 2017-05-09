<?php 
$query = mysql_query("SELECT id, name, cost_per_day, title FROM tour") or die(mysql_error());
// print_r($query);
?>
<table class="table dataTable" id="#tour_table">
<thead>
<!-- <th> -->
<td>Name</td>
<td>Title</td>
<td>Cost</td>
<td>Actions</td>
<!-- </th> -->	
</thead>
<tbody>
<?php while($rows = mysql_fetch_object($query)): ?>
	<tr>
		<td><?= $rows->name ?></td>
		<td><?= $rows->title ?></td>
		<td><?= $rows->cost_per_day ?></td>
		<td>
			<a class="btn btn-sm btn-default modalBtn" data-toogle="modal" data-url="admin.php?viewTour=<?= $rows->id?>" data-target="#tourModal">
				<i class="glyphicon glyphicon-eye-open"></i>
			</a>
			<a class="btn btn-sm btn-warning" href="admin.php?update=tour&id=<?= $rows->id?>" >
				<i class="glyphicon glyphicon-pencil"></i>
			</a>
			<a class="btn btn-sm btn-danger" data-toogle="modal" href="admin.php?deleteTour=<?= $rows->id?>" data-target="tourModal">
				<i class="glyphicon glyphicon-trash"></i>
			</a>
		</td>
	</tr>
<?php endwhile;?>
</tbody>
</table>

<?php 
//TABLE ORDER
$query = mysql_query("SELECT * FROM orders") or die(mysql_error());
// print_r($query);
?>
<table class="table dataTable" id="#tour_table">
<thead>
<!-- <th> -->
<td>First Name</td>
<td>Last Name</td>
<td>surname</td>

<!-- </th> -->	
</thead>
<tbody>
<?php while($rows = mysql_fetch_object($query)): ?>
	<tr>
		<td><?= $rows->firstname ?></td>
		<td><?= $rows->lastname ?></td>
		<td><?= $rows->surname ?></td>
		
	</tr>
<?php endwhile;?>
</tbody>
</table>
