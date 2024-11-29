<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freund hinzufügen</title>

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
                    <img src="../images/freunde_klein.png" class="img-responsive" width="130px">
                </div>
                <div class="col col-sm-10">
                    <h1>Freunde Portal</h1><h4>verwalte deine Freunde :)</h4>
                </div>
            </div>
        </div>
            

		 <!-- Static navbar -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="portalview.php">Freunde 5.0</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="friends_overview.php">Freunde</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="friends_add.php">Hinzufügen</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menü
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>

     <div class="row justify-content-center">
        <div class="col">
           <form method="post" action="newfriend.php">
                  <!-- Form Name -->
                  <legend>Freund hinzufügen</legend>
                  <br>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_freundVorname">Vorname</label>  
                    <div class="col-md-4">
                    <input id="txt_freundVorname" value="" name="txt_freundVorname" placeholder="Vorname" class="form-control input-md" required="" type="text">
                    </div>
                  </div><br>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_freundNachname">Nachname</label>  
                    <div class="col-md-4">
                    <input id="txt_freundNachname" value="" name="txt_freundNachname" placeholder="Nachname" class="form-control input-md" required="" type="text">
                    </div>
                  </div><br>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="txt_freundWohnort">Wohnort</label>  
                    <div class="col-md-4">
                    <input id="txt_freundWohnort" value="" name="txt_freundWohnort" placeholder="Ort" class="form-control input-md" required="" type="text">
                    </div>
                  </div><br>

                  <!-- Multiple Checkboxes -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="checkboxes_studiengang">Studiengang</label>
                    <div class="col-md-4">
                    <div class="checkbox">
                      <label for="checkboxes_studiengang-0">
                        <input name="checkboxes_studiengang" id="checkboxes_studiengang-0" value="Wirtschaftsinformatik" type="checkbox">
                        Wirtschaftsinformatik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label for="checkboxes_studiengang-1">
                        <input name="checkboxes_studiengang" id="checkboxes_studiengang-1" value="Medien- und Kommunikationsinformatik" type="checkbox">
                        Medien- und Kommunikationsinformatik
                      </label>
                    </div>
                    <div class="checkbox">
                      <label for="checkboxes_studiengang-2">
                        <input name="checkboxes_studiengang" id="checkboxes_studiengang-2" value="Medizinisch-Technische Informatik" type="checkbox">
                        Medizinisch-Technische Informatik
                      </label>
                    </div>
                    </div>
                  </div><br>

                   <!-- Multiple Radios (inline) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="radios_semester">Semester</label>
                    <div class="col-md-4"> 
                      <label class="radio-inline" for="radios_semester-0">
                        <input name="radios_semester" id="radios_semester-0" checked value="1" type="radio">
                        1
                      </label> 
                      <label class="radio-inline" for="radios_semester-1">
                        <input name="radios_semester" id="radios_semester-1" value="2" type="radio">
                        2
                      </label> 
                      <label class="radio-inline" for="radios_semester-2">
                        <input name="radios_semester" id="radios_semester-2" value="3" type="radio">
                        3
                      </label> 
                      <label class="radio-inline" for="radios_semester-3">
                        <input name="radios_semester" id="radios_semester-3" value="4" type="radio">
                        4
                      </label> 
                      <label class="radio-inline" for="radios_semester-4">
                        <input name="radios_semester"  id="radios_semester-4" value="5" type="radio">
                        5
                      </label> 
                      <label class="radio-inline" for="radios_semester-5">
                        <input name="radios_semester" id="radios_semester-5" value="6" type="radio">
                        6
                      </label> 
                      <label class="radio-inline" for="radios_semester-6">
                        <input name="radios_semester" id="radios_semester-6" value="7" type="radio">
                        7
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="button1_save"></label>
                    <div class="col-md-8">
                      <button type="submit" id="button1_save" name="button1_save" class="btn btn-success">Speichern</button>
                      <button type="reset" id="button2_cancel" name="button2_cancel" class="btn btn-inverse">Abbrechen</button>
                    </div>
                  </div>

                  </fieldset>
          </form>
        </div>
      </div>
   </div>

   <?php
  include 'footimport.php';
  ?>
  </body>

</html>