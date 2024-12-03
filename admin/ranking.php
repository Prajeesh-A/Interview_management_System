<?php
  include_once ("inc/classes/session.php");
  include ("inc/classes/View.php");

  $adminSession = new Session();
  if ($adminSession->getSession('alogin') != true) {
    header('Location: alogin.php');
  }
  $adminSession->destroy();

  $view = new View();
  $viewCandidates = $view->viewCandidate();
  //var_dump($viewCandidates);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Score</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<?php include ('nav.php'); ?>
    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-12  col-sm-8 ">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">View Score</div>

            </div>
            <div class="panel-body" >
              <table class="table table-bordered" style="width: 100%; table-layout: auto;">
                <thead>
                  <tr>
                  <th style="width: 4%;">Sl No</th>
                  <th style="width: 15%;">Candidate Name</th>
                    <th style="width: 10%;">Mark</th>
        
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $mysqli = new mysqli("localhost","root","mysql","interview");
                  $query = "SELECT sum(total) as total, scoresheet.cand_id, candidates.cand_name FROM `scoresheet` JOIN `candidates` on scoresheet.cand_id = `candidates`.`cand_id` GROUP BY cand_id ORDER BY total DESC";
                  $result = $mysqli -> query($query);
                  ?>
                  <?php while ($score = $result->fetch_assoc()): ?>
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $score['cand_id']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $score['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $score['total']; ?></td>
                  </tr>
                  <?php endwhile; ?>

                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
</div>
  </body>
</html>

<p class="text-center top_spac"> <a href="?action=logout">Logout</a> </p>
