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
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/tournament_teams_list_b').'/'.$tournament['id']; ?>">
      <?php for($i = 0; $i < $tournament['nbteams'] ;$i++): ?>
      <div class="form-group">
      <label for="nbteams">Equipe <?php echo $i+1; ?></label>
      <select class="custom-select" name="team-<?php echo $i+1; ?>">
        <?php foreach ($teams as $key => $team): ?>
            <option value="<?php echo $team['id'] ?>"><?php echo $team['name'] ?></option>
        <?php endforeach; ?>
      </select>
      </div>
       <?php endfor; ?>
      <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
    </div>

  </body>

  </html>