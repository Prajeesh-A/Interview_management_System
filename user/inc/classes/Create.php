<?php

/**
 * Create class for create some data in database
 */
// ini_set("display_errors", 1);
include_once("DB.php");
include_once("session.php");
class Create
{
  private $db;
  private $msgSession;
  function __construct()
  {
    $this->db = new DB();
    $this->msgSession = new Session();
  }

  //candidate creating method
  public function createCandidate($data)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCand'])) {
      $candName              = $data['candName'];
      $candEmail             = $data['candEmail'];
      $candQualification     = $data['candQuali'];
      $candAge               = $data['candAge'];
      $candNumber            = $data['candNumber'];
      $candAddress           = $data['candAddress'];
      $sslcmark              = $data['sslcmark'];
      $sslcyear              = $data['sslcyear'];
      $sslcname              = $data['sslcname'];
      $hscmark              = $data['hscmark'];
      $hsyear              = $data['hsyear'];
      $hsname              = $data['hsname'];
      $mtechmark              = $data['mtechmark'];
      $mtechname              = $data['mtechname'];
      $mtechyear              = $data['mtechyear'];
      $skils              = $data['skils'];
      $documents              = $data['doc'];




      //form server validation
      //check input field empty or not
      if (empty($candName) or empty($candEmail) or empty($candQualification) or empty($candAge) or empty($candNumber) or empty($candAddress)) {
        $msg = '<div class="alert alert-danger"><b>Form Fillup Error!</b> Fields Must Not be Empty</div>';
        return $msg;
        exit();
      }

      //email field validation
      if (filter_var($candEmail, FILTER_VALIDATE_EMAIL) === false) {
        $msg = '<div class="alert alert-danger"><b>Form Fillup Error!</b> Invalid Email</div>';
        return $msg;
        exit();
      }

      // Validate 'exp' index existence
      if (isset($data['exp'])) {
        $exp = $data['exp'];
      } else {
        $msg = '<div class="alert alert-danger"><b>Form Fillup Error!</b> Please provide a valid experience.</div>';
        return $msg;
        exit();
      }

      /// Validate 'cand_age' as integer
      if (!is_numeric($candAge)) {
        $msg = '<div class="alert alert-danger"><b>Form Fillup Error!</b> Please provide a valid age.</div>';
        return $msg;
        exit();
      }
      $candAge = (int)$candAge; // Convert $candAge to integer if it's numeric


      //insert data to databsae if everything is okay
      $sql = "insert into candidates(cand_name, cand_email, cand_phone, cand_age, cand_address, cand_qualification, sslcmark, sslcname, sslcyear, hscmark, hsyear, hsname, mtechmark, mtechname, mtechyear, skils, exp,documents) values(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $arr = array($candName, $candEmail, $candNumber, $candAge, $candAddress, $candQualification, $sslcmark, $sslcname, $sslcyear, $hscmark, $hsyear, $hsname, $mtechmark, $mtechname, $mtechyear, $skils, $exp, $documents);
      $results = $this->db->simplequery($sql, $arr);
      if ($results) {
        $msg = '<div class="alert alert-success"><b>Registration Success!</b> You have successfully added a new candidate.</div>';
        return $msg;
      } else {
        $msg = '<div class="alert alert-danger"><b>Registration Error!</b> Sorry, Some Unexpected Error Ocur, Please try again</div>';
        return $msg;
      }
    }
  }
}
