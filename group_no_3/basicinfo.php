<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Input|1</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
    </head>
    <body>
       <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper blue lighten-1">
                <a class="brand-logo center light" href="index.php"><span>Courses & Colleges</span></a>
            </div>
        </nav>
        </div>
        <br>
        <div class="row">
            <form class="col s12" method="post" action="<?php echo "$_SERVER[PHP_SELF]"; ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</lable>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="email_id" type="email" class="validate">
                        <label for="email_id" data-error="Wrong" data-success="Right">Email ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="school_board" type="text">
                            <option value="" disabled selected>Choose your school board</option>
                            <option value="state">State</option>
                            <option value="cbse">CBSE</option>
                            <option value="icse">ICSE</option>
                        </select>
                        <label>School Board</lable>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="school_stream">
                            <option value="" disabled selected>Choose your school stream</option>
                            <option value="bio_ip">Bio-IP</option>
                            <option value="bio_language">Bio-Language</option>
                            <option value="bio_maths">Bio-Maths</option>
                            <option value="commerce_ip">Commerce-IP</option>
                            <option value="commerce_maths">Commerce-Maths</option>
                            <option value="computer_maths">Computer Maths</option>
                            <option value="maths_ip">Maths-IP</option>
                            <option value="maths_language">Maths-Language</option>
                        </select>
                        <label>School Stream</lable>
                    </div>
                </div>
                <div class="center">
                    <button class="btn waves-effect waves-light z-depth-3 green accent-4" type="submit">
                        <i class="material-icons right">send</i>Next
                    </button>
                </div>
            </form>
        </div>       
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('select').material_select();      //to solve override of browser default (<select>)
            });
        </script>
    </body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require "dbconn.php";
    $first_name = $last_name = $email_if = $school_board = $school_stream = "";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);     //print message and exit script
    }
    $first_name = $_SESSION["first_name"] = $_POST["first_name"];
    $last_name = $_SESSION["last_name"] = $_POST["last_name"];
    $email_id = $_POST["email_id"];
    if(isset($_POST["school_board"])){
        $school_board = $_SESSION["school_board"] =  $_POST["school_board"];       
    }
    if(isset($_POST["school_stream"])){
        $school_stream = $_SESSION["school_stream"] =  $_POST["school_stream"];        
    }   
    $sql = "INSERT INTO user_details(first_name, last_name, email_id, school_board, school_stream) VALUES ('$first_name', '$last_name', '$email_id', '$school_board', '$school_stream')";
    if(mysqli_query($conn, $sql)){
         switch($school_stream){
            case "computer_maths": header('Location:input_comp_maths.php');
                                   break;
            case "bio_maths": header('Location:input_bio_maths.php');
                                   break;
            case "bio_language": header('Location:input_bio_lang.php');
                                   break;
            case "maths_language": header('Location:input_maths_lang.php');
                                   break;
            case "commerce_ip": header('Location:input_comm_ip.php');
                                   break;
            case "commerce_maths": header('Location:input_comm_maths.php');
                                   break;
            case "bio_ip": header('Location:input_bio_ip.php');
                                   break;
            case "maths_ip": header('Location:input_maths_ip.php');
                                   break;
        } 
    }
    else{
        echo "Error ".$sql. "<br>".$conn->error;
    }
}   
?>             
</html>