<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>

<div id="container">
	Page home

	<br />
	<div class="col-6">
	<h4>liste des tournois :</h4>
	<table class="table">
	<thead>
		<tr>
		<th>#</th>
		<th>nom</th>
		<th>mode</th>
		<th>date</th>
		<th>createur</th>
		<th>description</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($tournois as $row => $tournoi): ?>
		<tr>
			<th><?php echo $tournoi['id']; ?></th>
			<th><?php echo $tournoi['name']; ?></th>
			<th><?php echo $tournoi['mode']; ?></th>
			<th><?php echo $tournoi['date']; ?></th>
			<th><?php echo $tournoi['created_by']; ?></th>
			<th><?php echo $tournoi['description']; ?></th>
		</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
	<a href="<?php echo site_url('home/add_tournament'); ?>" class="btn btn-success">Creer un tournois</a>
	</div>
</div>

</body>
</html>