<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Courses & Colleges</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
    </head>
    <body>
       <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper blue lighten-1">
                <a class="brand-logo center light" href="index.php">Courses & Colleges</a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="adminlogin.php">Admin Login</a></li>
                  </ul>            
            </div>
        </nav>
        </div>

        <div class="row">
            <div class="section no-pad-bot">
              <div class="container">
                <br><br><br><br><br><br>
                <h4 class="header center light blue-grey-text text-lighten-5">Still confused about what to do with life?</h4>
                <div class="row center "><br>
                  <h5 class="header col s12 light blue-grey-text text-lighten-5">It's okay! You're at the right place. Welcome to Courses & Colleges. By the end of this Q&A you will find the answer to all your questions on which career to choose and which college suits you the best.</h5>
                </div>
                <div class="row center">
                    <br>
                    <a href="basicinfo.php" id="download-button" class="col card s4 offset-s4 btn-large waves-effect waves-light blue lighten-1"><h5 class="valign center light">Get Started</h5>
                    </a>
                </div>
              </div>
            </div>
            <img class="parallax responsive-img" src="img/start.jpg">
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('select').material_select();      //to solve override of browser default (<select>)
            });
        </script>
    </body>
</html>