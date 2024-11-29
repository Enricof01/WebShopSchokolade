<?php
  //PHP Session starten 
  session_start();

  if($_SESSION['login']!=111){
    //Sofort Logout!
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal</title>

    <?php
    include 'headimport.php';
    ?>

  </head>
  
  <body>

    <!--<div class="container-fluid">-->
    <div class="container">
      <br>
        <div class="page-header">
          <div class="row">
            <div class="col col-sm-2">
              <img src="../images/freunde_klein.png" 
              class="img-responsive" 
              width="130px">
            </div>
            <div class="col col-sm-10">
              <h1>Freunde Portal</h1><h4>verwalte deine Freunde :)</h4>
            </div>
        </div>
    </div>
    <?php
    include 'navimport.php';
    ?>
      <br>

    	<div class="row">
    		<h1>Herzlich Willkommen</h1>
        <p>Schön, dass du hier bist <b><?php echo $_SESSION['firstname']."".$_SESSION['lastname']; ?></b></p>
        <p>Du hast gerade <b> <?php
          
        include 'dbsettings.php';

        //Verbindung zur Datenbank
        $conn = new PDO("mysql:host=localhost;dbname=".$dbDatabasename,$dbLoginUsername,$dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="SELECT * FROM fpfriends WHERE userid=".$_SESSION['id'];
        $result = $conn->query($sql);
        echo $result->rowCount();
        
        ?>
        </b>Freunde!</p>
    	</div>
    </div>

    <?php
    include 'footimport.php';
    ?>
  </body>

</html>