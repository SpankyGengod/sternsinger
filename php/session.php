<?php
  include("dbsettings.php");

  function logout() {
    if (session_destroy()) {
      unset($_SESSION["user"]);
      header("Location: index.php");
    }
  }

  if (isset($_SESSION["user"])) {
    //$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    //$sql = "";
    //$result = mysqli_query($conn, $sql);
    //if (mysqli_num_rows($result) !== 1) {
    //  logout();
    //}
  } else {
    logout();
  }
?>
