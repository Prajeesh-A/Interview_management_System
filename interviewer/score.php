<?php
include_once("inc/classes/session.php");
include ("inc/classes/Create.php");
include("inc/classes/View.php");

ini_set("display_errors", 1);

$adminSession = new Session();
if ($adminSession->getSession('intlogin') != true) {
    header('Location: intlogin.php');
}
$adminSession->destroy();

$view = new View();
$viewCandidates = $view->viewCandidate();

$create = new Create();
$createScore = $create->createScore($_POST);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Score Sheet</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="score.js"></script>
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
        <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-12  col-sm-8 ">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <br>
                    <div class="panel-title">Score Sheet</div>
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($createScore)) {
                        echo $createScore;
                    }
                    ?>
                    <table class="table table-bordered" style="width: 100%; height: 200; table-layout: auto;">
                        <thead>
                            <tr>
                                <th>Admin 1</th>
                            </tr>
                            <tr>
                                <th style="width: 15%;">Candidate Name</th>
                                <th style="width: 10%;">B.Tech</th>
                                <th style="width: 5%;">M.Tech</th>
                                <th style="width: 10%;">Experience</th>
                                <th style="width: 5%;">communication</th>
                                <th style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($viewCandidates as $viewCandidate) : ?>
                                <?php
                                $mysqli = new mysqli("localhost","root","mysql","interview");
                                $inter_id = $adminSession->getSession('inter_id');
                                $query = "SELECT * FROM scoresheet WHERE cand_id=" . $viewCandidate["cand_id"] . " AND inter_id=" . $inter_id;
                                $score = $mysqli -> query($query) -> fetch_assoc();
                                ?>
                                <form action="" method="post">
                                    <tr>
                                        <input type="hidden" name="inter_id" value="<?= $inter_id ?>">
                                        <input type="hidden" name="cand_id" value="<?= $viewCandidate["cand_id"] ?>">
                                        <td style="vertical-align: middle;"><?php echo $viewCandidate['cand_name']; ?></td>
                                        <td style="vertical-align: middle;"><input type="number" <?= $score ? 'disabled' : '' ?> value="<?= $score["btech"] ?>" class="form-control text-end" name="btech"></td>
                                        <td style="vertical-align: middle;"><input type="number" <?= $score ? 'disabled' : '' ?> value="<?= $score["mtech"] ?>" class="form-control text-end" name="mtech"></td>
                                        <td style="vertical-align: middle;"><input type="number" <?= $score ? 'disabled' : '' ?> value="<?= $score["exp"] ?>" class="form-control text-end" name="exp"></td>
                                        <td style="vertical-align: middle;"><input type="number" <?= $score ? 'disabled' : '' ?> value="<?= $score["communication"] ?>" class="form-control text-end" name="com"></td>
                                        <td style="vertical-align: middle;"><button type="submit" <?= $score ? 'disabled' : '' ?> class="btn btn-primary" name="submitScore">Submit Scores</button>
                                    </tr>
                                </form>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                    <!-- Place your logout link here -->
                    <p class="text-center top_spac"><a href="?action=logout">Logout</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>