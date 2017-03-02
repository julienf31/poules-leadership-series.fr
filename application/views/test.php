<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
  <h1>Tableau apres tirage :</h1>
<?php 
$i =0;
foreach ($teams_after2 as $key => $team) {
    $i++;
    echo 'Equipe n° - '.$team;
    echo '<br>';
    if($i%2 == 0 )
        echo '<br>';
}
?>

<div class="row">
    <a class="btn btn-danger mx-5" href="<?php echo site_url('home/show_tournament/').$tournament['id']; ?>">Retour</a>
</div>
</body>
</html>