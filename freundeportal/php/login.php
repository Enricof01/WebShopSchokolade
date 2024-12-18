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
   <div class="container">  

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                  <h1>Login</h1>
                  <a href="index.html">
                    <img src="../images/freunde_klein.png" class="img-fluid"> 
                  </a> 
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Login</div>
                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                
                                <form method="post" action="checklogin.php" id="loginform" class="form-horizontal" role="form">
                                        
                                      <div style="margin-bottom: 25px" class="input-group">
                                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                  <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="email">                                        
                                      </div>
                                          
                                      <div style="margin-bottom: 25px" class="input-group">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                      </div>

                                      <div style="margin-top:10px" class="form-group">
                                          <div class="col-sm-12 controls">
                                            <button type="submit" id="btn-login" class="btn btn-success">Login</button>
                                          </div>
                                      </div>

                                </form> 

                            </div>                     
                        </div>  
                </div>
            </div>
        </div>
    
        <?php
    include 'footimport.php';
    ?>
  </body>

</html>