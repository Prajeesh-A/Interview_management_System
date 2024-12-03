<?php
  include ("inc/classes/Admin.php");
  include_once ("inc/classes/session.php");

?>
<?php
  $adminSession = new Session();
  if ($adminSession->getSession('alogin') == true) {
    //header('Location: chat.php');
  }

  $admin = new Admin();
  $registration = $admin->adminRegistration($_POST);
  $alogin = $admin->adminalogin($_POST);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/style.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="assets/main.js"></script>
    <title>alogin</title>
  </head>
  <body>
    <div class="container">
        	<div class="row">
    			<div class="col-md-6 col-md-offset-3">
          <?php
            if (isset($registration)) {
              echo $registration;
            }
            if (isset($alogin)) {
              echo $alogin;
            }
          ?>
    				<div class="panel panel-alogin">
    					<div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-6">
    								<a href="#" class="active" id="alogin-form-link"> Admin login</a>
    							</div>
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body">
    						<div class="row">
    							<div class="col-lg-12">
    								<form id="alogin-form" action="" method="post" role="form" style="display: block;">
    									<div class="form-group">
    										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    									</div>

    									<div class="form-group">
    										<div class="row">
    											<div class="col-sm-6 col-sm-offset-3">
    												<input type="submit" name="alogin-submit" id="alogin-submit" tabindex="4" class="form-control btn btn-alogin" value="Log In">
    											</div>
    										</div>
    									</div>

    								</form>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>


		<p style="margin-top: 10px; text-align: center"><a href="../index.html" style="width: 800px;" class="btn btn-primary" onclick="return confirm('Are you sure you want to go back?')">Back</a></p>  </body>
</html>