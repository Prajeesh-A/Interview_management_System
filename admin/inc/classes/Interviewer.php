<?php
//including main database connection class
include ("inc/classes/DB.php");
include_once ("inc/classes/session.php");
//creating inter class to handle inter with database
class inter{
  private $db;
  //initiate object of database class in constructor method
  public function __construct(){
    $this->db = new DB();
    //Parent DB class property to handle database $conn/conn
  }



  //inter alogin handling method
  public function interalogin($data){
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alogin-submit'])) {
      $email                 = $data['email'];
      $password              = $data['password'];
      $md5password           = md5($data['password']);

      //alogin form server validation
      //check input field empty or not
      if (empty($email) or empty($password)){
        $msg = '<div class="alert alert-danger"><b>alogin Error!</b> Fields Must Not be Empty</div>';
        return $msg;
        exit();
      }
      //email field validation
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = '<div class="alert alert-danger"><b>alogin Error!</b> Invalid Email</div>';
        return $msg;
        exit();
      }
      //check alogin credentials in database
      $sql = "select * from interviewer where email = ? AND password = ?";
      $arr = array($email, $md5password);
      $simplequery = $this->db->simplequery($sql, $arr);
      $results = $simplequery->fetch(PDO::FETCH_OBJ);
      if ($results) {
        $interSession = new Session();
        $interSession->setSession('intlogin', true);
        $interSession->setSession('inter_id', $results->inter_id);
        $interSession->setSession('inter_name', $results->inter_name);
        $interSession->setSession('email', $results->email);
        $interSession->setSession('aloginmsg', '<div class="alert alert-susscess"><b>alogin Success</div>');
        header("Location: viewCandidate.php");
      } else {
        $msg = '<div class="alert alert-danger"><b>alogin Error!</b> Your alogin attempt failed</div>';
        return $msg;
        exit();
      }
    }
  }
}
?>
