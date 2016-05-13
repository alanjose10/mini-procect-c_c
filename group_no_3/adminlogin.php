<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
    </head>
    <body>
       <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper blue lighten-1">
                <a class="brand-logo center light " href="#">Courses & Colleges</a>
            </div>
        </nav>
        </div>
        <br>
            <div class="row container center-align">
                <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                    <p><h5 class="light light blue-grey-text text-lighten-5">Admin Login</h5></p> 
                </div>
            </div>
    <div class="container center-align">
        <div class="row card">
            <br><br>
                <form class="col s12" method="post" action="<?php echo "$_SERVER[PHP_SELF]"; ?>">
                    <div class="row">
                        <div class="input-field col s6 offset-s3">
                            <input id="username" name="username" type="text" class="validate">
                            <label for="username">User Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 offset-s3">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="center row">
                        <button class="btn waves-effect waves-light z-depth-3 green accent-4" type="submit">
                            <i class="material-icons right">send</i>Login
                        </button>
                    </div><br><br>
                    <?php
                        if($_SERVER["REQUEST_METHOD"]=="POST"){
                            require "dbconn.php";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if($conn->connect_error){
                                die("Connection failed: ".$conn->connect_error);
                            }
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                         header("Location:entercollege.php");
                            } else {
                                 print "<p><h6>Incorrect Username or Password</h6></p>";
                            }
                        }
                    ?>
                </form>
            </div>
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