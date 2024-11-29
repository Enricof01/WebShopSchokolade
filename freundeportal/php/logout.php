<?php

    // Initialisierung der Session.
  // Wenn Sie session_name("irgendwas") verwenden, vergessen Sie es
  // jetzt nicht!
  session_start();

  // Löschen aller Session-Variablen.
  $_SESSION = array();

  // Falls die Session gelöscht werden soll, löschen Sie auch das
  // Session-Cookie.
  // Achtung: Damit wird die Session gelöscht, nicht nur die Session-Daten!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000, $params["path"],
          $params["domain"], $params["secure"], $params["httponly"]
      );
  }

  // Zum Schluß, löschen der Session.
  session_destroy();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout</title>

     <!-- Bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="../node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">

  </head>
  
  <body>
    <br><br>
    <div class="container-fluid">
      <div class="row text-center">
         <h1>Bis bald!</h1>
         <br>
         <img src="../images/logout.jpg" class="img-fluid">
      </div>	  
    </div>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
  </body>
</html>