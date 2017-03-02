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
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/launch_tournament_b').'/'.$tournament['id']; ?>">
      <div class="form-group">
      <label for="usr">Nombres d'équipes :</label>
        <select class="custom-select" name="nbteams">
            <?php for ($i=0; $i <= 20; $i+=2): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        </div>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
    </div>
    <a href="<?php echo site_url('home/show_tournament/').$tournament['id']; ?>" class="btn btn-danger">Retour</a>
    </div>

  </body>

  </html>