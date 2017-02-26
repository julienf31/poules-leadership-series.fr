<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>

  <body>
  <div class="col-6">
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/add_matches_b').'/'.$tournament['id']; ?>">
      <div class="form-group">
        <label for="usr">Nom du match</label>
        <input type="text" class="form-control" name="match_name" placeholder="Nom du match">
      </div>
      <div class="form-group">
      <label for="usr">Équipes :</label>
        <select class="custom-select" name="team1">
            <?php foreach($teams as $row => $team): ?>
            <option value="<?php echo $team['name']; ?>"><?php echo $team['name']; ?></option>
            <?php endforeach; ?>
        </select>
        VS <select class="custom-select" name="team2">
            <?php foreach($teams as $row => $team): ?>
            <option value="<?php echo $team['name']; ?>"><?php echo $team['name']; ?></option>
            <?php endforeach; ?>
        </select>
        </div>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
    </div>
    </div>

  </body>

  </html>