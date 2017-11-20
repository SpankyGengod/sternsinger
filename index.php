<?php
  session_start();
  include("php/dbsettings.php");

  if (isset($_POST["inputName"]) && isset($_POST["inputPass"])) {
    $username = $_POST["inputName"];
    $password = md5($_POST["inputPass"]);

    //MYSQL LOGIN BENÖTIGT

    $_SESSION["user"] = $username;
  }

  if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page == "dash") {
      include_once("php/session.php");
      include_once("php/user.php");
    } elseif ($page == "logout") {
      include_once("php/logout.php");
    } elseif ($page == "imprint") {
      include_once("php/imprint.php");
    } elseif ($page == "order") {
      include_once("php/order.php");
    } else {
      $page = "main";
    }
  } else {
    $page = "main";
  }
  if ($page == "main") {
    include("php/content.php");
  }

  if (isset($_SESSION["user"])) {
    $username = $_SESSION["user"];
    $navLogin = '<li class="nav-item"><a class="nav-link" href="?page=dash"><i class="fa fa-user" aria-hidden="true"></i> '.$username.'</a></li><li class="nav-item"><a class="nav-link" href="?page=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';
  } else {
    $navLogin = '<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#loginModal" href=""><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>';
  }
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sternsinger in Neureut und Kirchfeld bestellen">

    <title>Sternsinger</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/png" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navcolor fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><img src="img/icon.png" width="45" height="45"></img> Sternsinger</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="?page=main"><i class="fa fa-home" aria-hidden="true"></i> Start</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=imprint"><i class="fa fa-list" aria-hidden="true"></i> Impressum</a>
            </li>
            <?php echo $navLogin; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login für Sternsinger</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="loginForm" method="POST" action="?page=dash">
              <div class="form-group">
                <label for="inputName">Benutzername:</label>
                <input type="text" class="form-control" id="inputName" name="inputName" autofocus required>
              </div>
              <div class="form-group">
                <label for="inputPass">Passwort:</label>
                <input type="password" class="form-control" id="i nputPasss" name="inputPass" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            <button type="submit" form="loginForm" class="btn btn-primary">Anmelden</button>
          </div>
        </div>
      </div>
    </div>

    <?php if (isset($content)) { echo $content; } ?>

    <br>
    <footer class="py-5 navcolor">
      <div class="container">
        <p class="m-0 text-center"><a href="?page=imprint">Impressum</a> &copy; 2017</p>
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
