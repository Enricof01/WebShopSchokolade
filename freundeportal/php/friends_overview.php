<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freunde</title>

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
     <?php
    include 'navimport.php';
    ?>

      <div class="row">
        <div class="col text-center">
          <br>
          <h2>Meine Freunde</h2>
        </div>
      </div>

    	<div class="row">
         <div class="col">
           <br>
           <div class="table-responsive">
              <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Edit</th>
                      <th>Nummer</th>
                      <th>Vorname</th>
                      <th>Nachname</th>
                      <th>Wohnort</th>
                      <th>Studiengang</th>
                      <th>Semester</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                   <tbody>
                     <tr>
                      <td>
                        <a href="friends_edit.html"><i class="fa fa-pencil-alt"></i></a>
                      </td>
                      <td>1</td>
                      <td>Tom</td>
                      <td>Berger</td>
                      <td>Stuttgart</td>
                      <td>Wirtschaftsinformatik</td>
                      <td>4</td>
                      <td>
                        <i class="fa fa-trash-alt"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="friends_edit.php"><i class="fa fa-pencil-alt"></i></a>
                      </td>
                      <td>2</td>
                      <td>Saskia</td>
                      <td>Müller</td>
                      <td>Tübingen</td>
                      <td>Medien- und Kommunikationsinformatik</td>
                      <td>2</td>
                      <td>
                        <i class="fa fa-trash-alt"></i>
                      </td>
                    </tr>
                     <tr>
                      <td>
                        <a href="friends_edit.html"><i class="fa fa-pencil-alt"></i></a>
                      </td>
                      <td>3</td>
                      <td>Anna</td>
                      <td>Dayer</td>
                      <td>Pfullingen</td>
                      <td>Medizinisch-Technische Informatik</td>
                      <td>5</td>
                      <td>
                        <i class="fa fa-trash-alt"></i>
                      </td>
                    </tr>
                   </tbody>
              </table>
           </div>
            
         </div>
    	</div>

    </div>

    
    <?php
    include 'footimport.php';
    ?>
  </body>

</html>