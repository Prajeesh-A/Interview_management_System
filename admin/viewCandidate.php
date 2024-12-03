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
    <title>View all Candidates</title>
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
                <div class="panel-title">View All Candidates</div>

            </div>
            <div class="panel-body" >
              <table class="table table-bordered" style="width: 100%; table-layout: auto;">
                <thead>
                  <tr>
                    <th style="width: 15%;">Candidate Name</th>
                    <th style="width: 10%;">Candidate Email</th>
                    <th style="width: 5%;">Contact</th>
                    <th style="width: 30%;">Candidate Qualification</th>
                    <th style="width: 5%;">Age</th>
                    <th style="width: 25%;">Candidate Address</th>
                    <th style="width: 15%;">SSlc Mark</th>
                    <th style="width: 15%;">Sslc Pass out Year </th>
                    <th style="width: 15%;">High school Name</th>
                    <th style="width: 15%;">+2 Mark</th>
                    <th style="width: 15%;">+2 Pass out Year </th>
                    <th style="width: 15%;">Higher secondary school Name</th>
                    <th style="width: 15%;">M-tech Mark</th>
                    <th style="width: 15%;"> Pass out Year </th>
                    <th style="width: 15%;">College name Name</th>
                    <th style="width: 40%;">Skills</th>
                    <th style="width: 10%;">Expeirence </th>
                    <th style="width: 15%;">Documents </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($viewCandidates as $viewCandidate): ?>
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_email']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_phone']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_qualification']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_age']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_address']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['sslcmark']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['sslcyear']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['sslcname']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['hscmark']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['hsyear']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['hsname']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['mtechmark']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['mtechname']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['mtechyear']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['skils']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['exp']; ?></td>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['doc']; ?></td>
                    <td style="vertical-align: middle;">
                      <a href="score.php?id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-success">score sheet</a>
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
