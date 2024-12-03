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
                
                  <th style="width: 15%;">Candidate Name</th>
                    <th style="width: 10%;">B.Tech</th>
                    <th style="width: 5%;">M.Tech</th>
                    <th style="width: 10%;">Experience</th>
                    <th style="width: 5%;">communication</th>
                    <th style="width: 10%;">Total</th>
                    <th style="width: 10%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($viewCandidates as $viewCandidate): ?>
                  <?php
                    $mysqli = new mysqli("localhost","root","mysql","interview");
                    $query = "SELECT sum(btech) as btech, sum(mtech) as mtech, sum(exp) as exp, sum(communication) as com, sum(total) as total FROM `scoresheet` WHERE cand_id=" . $viewCandidate['cand_id'] . " GROUP BY cand_id";
                    $score = $mysqli -> query($query) -> fetch_assoc();
                  ?>
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><?= $score['btech'] ?></td>
                    <td style="vertical-align: middle;"><?= $score['mtech'] ?></td>
                    <td style="vertical-align: middle;"><?= $score['exp'] ?></td>
                    <td style="vertical-align: middle;"><?= $score['com'] ?></td>
                    <td style="vertical-align: middle;"><?= $score['total'] ?></td>
                    <td style="vertical-align: middle;">
                      <a href="delete.php?action=deletecand&id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-danger">Remove</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

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
