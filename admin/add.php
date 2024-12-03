
<?php
  include ("../interviewer/inc/classes/Interviewer.php");
  include_once ("inc/classes/session.php");
  ini_set("display_errors", 1);
  $adminSession = new Session();
  
  $admin = new inter();
  $registration = $admin->adminRegistration($_POST);
  $alogin = $admin->interalogin($_POST);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<div class="container">
<?php include ('nav.php'); ?>
    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-12  col-sm-8 ">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">HOME PAGE</div>

            </div>
            <div class="panel-body" >

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
    								<a href="#" class="active" id="register-form-link">Add Admin</a>
    							</div>
    							<div class="col-xs-6">
    							
    							</div>
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body">
    						<div class="row">
    							<div class="col-lg-12">

    								<form id="register-form" action="" method="post" role="form" ">
    									<div class="form-group">
    										<input type="text" name="adminname" id="adminname" tabindex="1" class="form-control" placeholder="Adminname" value="">
    									</div>
    									<div class="form-group">
    										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    									</div>
    									<div class="form-group">
    										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
    									</div>
    									<div class="form-group">
    										<div class="row">
    											<div class="col-sm-6 col-sm-offset-3">
    												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Add">
    											</div>
    										</div>
    									</div>
    								</form>
    							</div>
    						</div>
    
  </body>
</html>
