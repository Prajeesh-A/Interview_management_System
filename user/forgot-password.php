

<!DOCTYPE html>
<html>



<?php
// Get submitted email
$email = $_POST['email'];

// Generate new password
$new_password = bin2hex(random_bytes(10));

// Connect to database
$db = new mysqli('localhost', 'root', 'mysql', 'interview');

// Update user's password in database
$stmt = $db->prepare("UPDATE user SET password = ? WHERE email = ?");
$stmt->bind_param("ss", $new_password, $email);
$stmt->execute();

// Send new password to user's email
$to = $email;
$subject = "New Password";
$message = "Your new password is: " . $new_password;
$headers = "From: prajeesh2107@gmail.com";
mail($to, $subject, $message, $headers);

// Close database connection
$stmt->close();
$db->close();
?>




 <!----blue color interface---->
 <head>

    <meta charset="utf-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="assets/style.css" rel="stylesheet">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Forgot Password</title>

  </head>

  <body>

    <div class="container">

      <div class="row">

        <div>

          <div class="panel panel-login">

            <div class="panel-heading">

              <div class="panel-title">

                <h1>Forgot Password</h1>

              </div>

            </div>

            <div class="panel-body">

              <form id="forgot-form" action="login.php" method="post" role="form" style="display: block;">

                <div class="form-group">

                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">

                </div>

                <div class="form-group">

                  <input type="submit" name="forgot-submit" id="forgot-submit" tabindex="4" class="form-control btn btn-login" value="Submit">

                </div>

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>


    <script src="assets/main.js"></script>

  </body>
</html>
