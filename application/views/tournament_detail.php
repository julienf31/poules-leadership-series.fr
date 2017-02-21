<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="col-6">
<h3>Détails du tournois : <?php echo $tournament['name']; ?></h3>

<ul class="list-group">
  <li class="list-group-item list-group-item-success">Créateur : <?php echo $tournament['created_by']; ?></li>
  <li class="list-group-item">Nom du tournois : <?php echo $tournament['name']; ?></li>
  <li class="list-group-item">Description du tournois : <?php echo $tournament['description']; ?></li>
  <li class="list-group-item">Date : <?php echo $tournament['date']; ?></li>
  <li class="list-group-item">Mode du tournois : <?php echo $tournament['mode']; ?></li>
</ul>
<a href="<?php echo site_url('home/index'); ?>" class="btn btn-danger">Retour</a>
<h3>Détail des matchs du tournois :</h3>
<?php if(!$tournament['matchs']): ?>
Pas de matchs dans ce tournoi
<?php else: ?>
    <?php foreach($tournament['matchs'] as $key_match => $match): ?>
        Match #<?php echo $key_match+1; ?><br />
        <?php echo $match['team1'].' '.$match['score1']; ?> : <?php echo $match['score2'].' '.$match['team2'];?>
    <?php endforeach; ?>
<?php endif; ?>
<div class="row">
    <a href="<?php echo site_url('home/add_matches'); ?>" class="btn btn-success">Ajouter un match</a>
</div>


</div>
</body>
</html>