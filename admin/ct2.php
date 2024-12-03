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
<script src="score.js"></script>
  <head>
    <meta charset="utf-8">
    <title>Score Sheet</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.input {
padding: 20px 15px;
border: 1px 1px;
width: 100%;
font-size: 20px;
background-color: #b2d4e4;
border-radius: 8px;
color: black;
text-align: left;
}
</style>
  </head>
  <body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<?php include ('nav.php'); ?>
    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-12  col-sm-8 ">
        <div class="panel panel-info">
            <div class="panel-heading">
              <br>
                <div class="panel-title">Score Sheet</div>
            </div>
            <div class="panel-body" >
              <table class="table table-bordered" style="width: 100%; height=200; table-layout: auto;">
                <thead>
                <tr>
                  <th>Admin 1</th></tr>
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
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="n1[]" id="n1[]" onchange="Calc(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="n2[]"  id="n2[]" onchange="Calc(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="n3[]" id="n3[]" onchange="Calc(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="n4[]" id="n4[]" onchange="Calc(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="amt[]" id="amt[]" value="0" readonly="readonly"></td>
                    <td style="vertical-align: middle;">
                    <a href="save.php?id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-success">save</a>
                      
                     
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>


              <br><br>
              <table class="table table-bordered" style="width: 100%; height=200; table-layout: auto;">
                <thead>
                <tr>
                  <th>Admin 2</th></tr>
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
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="m1[]" id="m1[]" onchange="Calc1(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="m2[]"  id="m2[]" onchange="Calc1(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="m3[]" id="m3[]" onchange="Calc1(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="m4[]" id="m4[]" onchange="Calc1(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="amt1[]" id="amt1[]" value="0" readonly="readonly"></td>
                    <td style="vertical-align: middle;">
                    <a href="save.php?id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-success">save</a>
                      
                     
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
              <br><br>
              <table class="table table-bordered" style="width: 100%; height=200; table-layout: auto;">
                <thead>
                <tr>
                  <th>Admin 3</th></tr>
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
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="p1[]" id="p1[]" onchange="Calc2(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="p2[]"  id="p2[]" onchange="Calc2(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="p3[]" id="p3[]" onchange="Calc2(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="p4[]" id="p4[]" onchange="Calc2(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="amt2[]" id="amt2[]" value="0" readonly="readonly"></td>
                    <td style="vertical-align: middle;">
                    <a href="save.php?id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-success">save</a>
                      
                     
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
              <br><br>

              <table class="table table-bordered" style="width: 100%; height=200; table-layout: auto;">
                <thead>
                <tr>
                  <th>Admin 4</th></tr>
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
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="q1[]" id="q1[]" onchange="Calc3(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="q2[]"  id="q2[]" onchange="Calc3(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="q3[]" id="q3[]" onchange="Calc3(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="q4[]" id="q4[]" onchange="Calc3(this);"></td>
                    <td style="vertical-align: middle;"><input type="number" class="form-control text-end" name="amt3[]" id="amt3[]" value="0" readonly="readonly"></td>
                    <td style="vertical-align: middle;">
                    <a href="save.php?id=<?php echo $viewCandidate['cand_id']; ?>" style="width: 100px; margin-top: 5px;" class="btn btn-success">save</a>
                      
                     
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
              <br><br>


            </div> 
        </div>
    </div>
</div>



</div>



  </body>
</html>







<p class="text-center top_spac"> <a href="?action=logout">Logout</a> </p>
.