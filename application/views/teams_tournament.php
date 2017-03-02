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
  <?php if($tournament['nbteams']>$nbteams): ?>
  <div class="alert alert-warning">Vous n'avez pas assez d'équipes pour créer ce tournois, creez d'abord des équipes pour lancer ce tournois !</div>
  <?php else:?>
    <form method="post" accept-charset="utf-8" action="<?php echo site_url('home/tournament_teams_list_b').'/'.$tournament['id']; ?>">
      <?php for($i = 0; $i < intval($tournament['nbteams']) ;$i++): ?>
      <div class="form-group">
      <label for="nbteams">Equipe <?php echo $i+1; ?></label>
      <select class="custom-select" name="team-<?php echo $i+1; ?>">
      // BUG DU UNIQUE
        <?php foreach ($teams as $key => $team): ?>
            <option value="<?php echo $team['id'] ?>" <?php //if($team['id'] == intval($participants[$i]['team_id'])){ echo 'selected';} ?>><?php echo $team['name'] ?></option>
        <?php endforeach; ?>
      </select>
      </div>
       <?php endfor; ?>
       <div class="row">
          <a href="<?php echo site_url('home/show_tournament/').$tournament['id']; ?>" class="btn btn-danger">Retour</a>
          <button type="submit" class="btn btn-success">Enregistrer</button>
      </div>
    </form>
    <?php endif; ?>
    </div>

  </body>

  </html>