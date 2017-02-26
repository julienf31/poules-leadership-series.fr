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
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/add_tournament_b'); ?>">
      <div class="form-group">
        <label for="usr">Nom du tournois</label>
        <input type="text" class="form-control" name="tournament_name" placeholder="Nom du tournois">
      </div>
      <div class="form-group">
      <label for="usr">Discipline du tournois :</label>
        <select class="custom-select" name="mode">
            <?php foreach($disciplines as $row => $discipline): ?>
            <option value="<?php echo $discipline['name']; ?>"><?php echo $discipline['name']; ?></option>
            <?php endforeach; ?>
        </select>
        </div>
      <div class="form-group">
        <label for="usr">Description du tournois :</label>
        <textarea type="text" class="form-control" name="tournament_description" placeholder="Description du tournois"></textarea>
      </div>
          <a href="<?php echo site_url('home/index'); ?>" class="btn btn-danger mx-3 my-3">Retour</a>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
    </div>
    </div>

  </body>

  </html>