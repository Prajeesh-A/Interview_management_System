<?php
  include_once ("inc/classes/session.php");
  include ("inc/classes/View.php");

  $userSession = new Session();
  if ($userSession->getSession('login') != true) {
    header('Location: alogin.php');
  }
  $userSession->destroy();

  $view = new View();
  $viewCandidates = $view->viewCandidate();
  //var_dump($viewCandidates);
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View Candidates</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <header>

    <nav class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="image.php"><img src="logo.png" alt="Logo"></a>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav">

            <li><a href="wel.php">Home</a></li>

            <li><a href="about.php">About</a></li>


            <li><a href="contact.php">Contact</a></li>

          </ul>  
          

          <ul class="nav navbar-nav navbar-right">
          <p class="text-center down_spac"> <a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a> </p>


          </ul>

        </div>

      </div>

    </nav>

  </header>

  <main>

    <div class="container">

      <div class="row">

        <div class="col-md-8 col-md-offset-2">

          <div class="panel panel-default">

            <div class="panel-heading text-center">
              <br>
              <br>

              <h1>Welcome To Interview Management System</h1>
</br>
</br>

            </div>

            <div class="panel-body">

              <p class="text-center">

                <a href="options.php" class="btn btn-primary btn-lg">Available Departments</a>

              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>

  <footer>

    <div class="container">

      <p class="text-center down_spac"> <a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a> </p>

    </div>

  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
<!------ Include the above in your HEAD tag ---------->


        </div>
    </div>
</div>
</div>
<center>
                    
</center>                   
  </body>
</html>


  </body>
</html>
