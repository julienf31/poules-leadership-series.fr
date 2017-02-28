<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Home - Add Team</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>

  <body>
  <div class="col-6">
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/add_teams_b'); ?>">
      <div class="form-group">
        <label for="team">Nom de l'équipe</label>
        <input type="text" class="form-control" name="team" placeholder="Nom de l'équipe">
      </div>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
    </div>
    </div>

  </body>

  </html>