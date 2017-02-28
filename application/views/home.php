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

    <div id="container">
      Page home En tout, il y a :
      <?php echo $nbteams; ?> équipes
        <br/>
        <br />
        <div class="row">
          <div class="col-6">
            <h4>liste des tournoi :</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>nom</th>
                  <th>mode</th>
                  <th>date</th>
                  <th>createur</th>
                  <th>description</th>
                  <th>teams</th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($tournois as $row => $tournoi): ?>
                  <tr>
                    <th>
                      <?php echo $tournoi['id']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['name']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['mode']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['date']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['created_by']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['description']; ?>
                    </th>
                    <th>
                      <?php echo $tournoi['nbteams'];?>
                    </th>
                    <th><a href="<?php echo site_url('home/show_tournament').'/'.$tournoi['id']; ?>" class="btn btn-link">Apercu</a>
					<a href="<?php echo site_url('home/delete_tournament').'/'.$tournoi['id']; ?>" class="btn btn-link">Supprimer</a></th></th>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo site_url('home/add_tournament'); ?>" class="btn btn-success">Creer un tournoi</a>
          </div>
		  </div><div class="row">
          <div class="col-6">
            <h4>liste des équipes :</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>nom</th>
                  <th>createur</th>
                  <th>matchs gagnés</th>
                  <th>tournois gagnés</th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($teams as $row => $team): ?>
                  <tr>
                    <th>
                      <?php echo $row+1; ?>
                    </th>
                    <th>
                      <?php echo $team['name']; ?>
                    </th>
                    <th>
                      <?php echo $team['owner']; ?>
                    </th>
                    <th>
                      <?php echo $team['stats_win_match']; ?>
                    </th>
                    <th>
                      <?php echo $team['stats_win_tournament']; ?>
                    </th>
                    <th><a href="<?php echo site_url('home/show_tournament').'/'.$team['id']; ?>" class="btn btn-link disabled">Apercu</a>
                      <a href="<?php echo site_url('home/delete_team').'/'.$team['id']; ?>" class="btn btn-link">Supprimer</a></th>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
            <a href="<?php echo site_url('home/add_teams'); ?>" class="btn btn-success">Creer une équipe</a>
          </div>
        </div>
    </div>

  </body>

  </html>