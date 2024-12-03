<?php
    ini_set("display_errors", 1);
  include_once ("inc/classes/session.php");
  include ("inc/classes/Create.php");

  $userSession = new Session();
  if ($userSession->getSession('login') != true) {
    header('Location: login.php');
  }
  $userSession->destroy();
  $create = new Create();
  $addCandidate = $create->createCandidate($_POST);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Add a Candidate</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<?php include ('home.php'); ?>
<div style="width: 50%; margin: 25px auto;">
  <?php
    if (isset($addCandidate)) {
      echo $addCandidate;
    }
  ?>
</div>

<!-- PERSONAL INFO -->

<div id="signupbox" style=" margin-top:10px" class="mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
<form method="post" action="ct.php">
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">PERSONAL INFO</div>
    </div>
    <div class="panel-body" >
        <div id="div_id_username" class="form-group required">
            <label for="id_username" class="control-label col-md-4  requiredField"> Candidate Name<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md  textinput textInput form-control" id="candName" maxlength="30" name="candName" placeholder="Candidate Name" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_email" class="form-group required">
            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md emailinput form-control" id="candEmail" name="candEmail" placeholder="Candidate email address" style="margin-bottom: 10px" type="email" />
            </div>
        </div>

        <!-- <div id="div_id_gender" class="form-group required">
        <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>
        <div class="controls col-md-8 "  style="margin-bottom: 10px">
        <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="M"  style="margin-bottom: 10px">Male</label>
        <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="F"  style="margin-bottom: 10px">Female </label>
        </div>
        </div> -->

        <div id="div_id_location" class="form-group required">
            <label for="id_location" class="control-label col-md-4  requiredField"> Candidate Qualification<span class="asteriskField">*</span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="candQuali" name="candQuali" placeholder="Candidate Qualification" style="margin-bottom: 10px" type="text" />
            </div>
        </div>

        <div id="div_id_number" class="form-group required">
            <label for="id_number" class="control-label col-md-4  requiredField"> Age <span class="asteriskField">*</span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="candAge" name="candAge" placeholder="Age" style="margin-bottom: 10px" type="text" />
            </div>
        </div>

        <div id="div_id_number" class="form-group required">
            <label for="id_number" class="control-label col-md-4  requiredField"> Contact number<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="candNumber" name="candNumber" placeholder="provide candidate number" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_location" class="form-group required">
            <label for="id_location" class="control-label col-md-4  requiredField"> Your Location<span class="asteriskField">*</span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="candAddress" name="candAddress" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
    </div>
</div>

<!-- EDUCATION -->

<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">EDUCATION INFO</div>
    </div>
    <div class="panel-body">
        <div id="div_id_sslcmark" class="form-group required">
            <label for="id_sslcmark" class="control-label col-md-4  requiredField"> SSLC Mark<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="sslcmark" name="sslcmark" placeholder="provide sslcmark" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_sslcyear" class="form-group required">
            <label for="id_sslcyear" class="control-label col-md-4  requiredField"> SSLC PassoutYear<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="sslcyear" name="sslcyear" placeholder="provide sslc passoutYear" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_sslcname" class="form-group required">
            <label for="id_sslcname" class="control-label col-md-4  requiredField"> High School Name<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="sslcname" name="sslcname" placeholder="provide High SChool Name" style="margin-bottom: 10px" type="text" />
            </div>
        </div>

        <div id="div_id_hscmark" class="form-group required">
            <label for="id_hscmark" class="control-label col-md-4  requiredField"> +2 Mark<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="hscmark" name="hscmark" placeholder="provide +2cmark" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_hsyear" class="form-group required">
            <label for="id_hsyear" class="control-label col-md-4  requiredField"> +2 PassoutYear<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="hsyear" name="hsyear" placeholder="provide +2 passoutYear" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_hsname" class="form-group required">
            <label for="id_hsname" class="control-label col-md-4  requiredField"> HSS Name<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="hsname" name="hsname" placeholder="provide Higher Secondary SChool Name" style="margin-bottom: 10px" type="text" />
            </div>
        </div>

        <div id="div_id_mtechmark" class="form-group required">
            <label for="id_mtechmark" class="control-label col-md-4  requiredField"> M-tech Mark<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="mtechmark" name="mtechmark" placeholder="provide mtechmark" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_mtechyear" class="form-group required">
            <label for="id_mtechyear" class="control-label col-md-4  requiredField"> M-tech PassoutYear<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="mtechyear" name="mtechyear" placeholder="provide mtech passoutYear" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
        <div id="div_id_mtechname" class="form-group required">
            <label for="id_mtechname" class="control-label col-md-4  requiredField"> College Name<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="mtechname" name="mtechname" placeholder="provide High SChool Name" style="margin-bottom: 10px" type="text" />
            </div>
        </div>
    </div>
</div>

<!-- SKILLS -->

<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">SKILS </div>
    </div>
    <div class="panel-body" >
        <div id="div_id_skils" class="form-group required">
            <label for="id_skils" class="control-label col-md-4  requiredField"> Skils<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="skils" name="skils" placeholder="provide skils" style="margin-bottom: 10px" type="text" />
                <input class="input-md textinput textInput form-control" id="skils2" name="skils2" placeholder="provide skil" style="margin-bottom: 10px" type="text" />
                <input class="input-md textinput textInput form-control" id="skils3" name="skils3" placeholder="provide skil" style="margin-bottom: 10px" type="text" />


            </div>
        </div>
    </div>
</div>


<!-- EXPERIENCE -->

<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Experience </div>
    </div>
    <div class="panel-body" >
        <div id="div_id_exp" class="form-group required">
            <label for="id_exp" class="control-label col-md-4  requiredField"> experiences<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input id="exp" name="exp" value="Yes" style="margin-bottom: 10px" type="radio" />
                <label for="exp">Yes</label>
                <input id="exp" name="exp" value="No" style="margin-bottom: 10px" type="radio" />
                <label for="exp">No</label>
            </div>
        </div>
    </div>
</div>


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Certificate </div>
    </div>
    <div class="panel-body" >
        <div id="div_id_doc" class="form-group required">
            <label for="id_doc" class="control-label col-md-4  requiredField"> Documents<span class="asteriskField"></span> </label>
            <div class="controls col-md-8 ">
                <input class="input-md textinput textInput form-control" id="doc" name="doc" placeholder="Provide cirtificates" style="margin-bottom: 10px" type="file" />
            </div>
        </div>
    </div>
</div>

    <div class="form-group">
        <div class="controls col-md-8 ">
            <input type="submit" name="addCand" value="Add New Candidate" class="btn btn-primary btn btn-info" id="addCand"/><br>
        </div>
    </div>
    </form>
    <center>
        <a href="options.php" style="width: 80px;" class="btn btn-primary">Back</a><br><br>
    </center>
    <p class="text-center top_spac"><a href="?action=logout">Logout</a> </p>
    
</body>
</html>