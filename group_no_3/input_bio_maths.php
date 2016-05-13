<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Courses and Colleges</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
       <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper blue lighten-1">
                <a class="brand-logo center light" href="#">Courses & Colleges</a>
            </div>
        </nav>
        </div>
        <br>
        <div>
            <span class="center-align"><h5 class="flow-text light">PLEASE ENTER 12TH BOARD MARKS (BIO-MATHS):</h5></span>
        </div>
        <div class="row">
            <form class="col s12" method="post" action="<?php echo "$_SERVER[PHP_SELF]"; ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="maths" name="maths" type="number" class="validate">
                        <label for="maths">Maths</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="physics" name="physics" type="number" class="validate">
                        <label for="physics">Physics</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="chemistry" name="chemistry" type="number" class="validate">
                        <label for="chemistry">Chemistry</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="english" name="english" type="number" class="validate">
                        <label for="english">English</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="biology" name="biology" type="number" class="validate">
                        <label for="biology">Biology</label>
                    </div>
                </div>
                <div class="row">
                     <div class="input-field col s6">
                        <select name="sec_lang_name" id="sec_lang_name">
                            <option value="" selected>No second language</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="hindi">Hindi</option>
                        </select>
                        <label for="sec_lang_name">Select second language</label>

                    </div>
                    <div class="input-field col s6">
                        <input id="second_lang" type="number" name="second_lang" class="validate">
                        <label for="second_lang">Second Language</label>
                    </div>
                </div>
                <div class="center">
                    <button class="btn waves-effect waves-light green accent-4" type="submit">
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
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql = "SELECT user_id from user_details ORDER BY user_id DESC LIMIT 1";
    $result = $conn->query($sql);
        if (!$result) {
            echo 'MySQL Error: ' . mysqli_error();
            exit;
        }
    $row = mysqli_fetch_assoc($result);
    $_SESSION["user_id"] = $row["user_id"];
    $maths = $_POST["maths"];
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];
    $english = $_POST["english"];
    $biology = $_POST["biology"];
    $sec_lang_name = $_POST["sec_lang_name"];
    if($sec_lang_name == ""){
        $sec_lang_name = null;
    }
    $second_lang = $_POST["second_lang"];
    if($second_lang == 0){
        $second_lang = null;
    }
    $sql = "INSERT INTO bio_maths(user_id, maths, physics, chemistry, english, biology, sec_lang_name, second_lang) VALUES ('$row[user_id]', '$maths', '$physics', '$chemistry', '$english', '$biology', '$sec_lang_name', '$second_lang')";
    if(mysqli_query($conn, $sql)){
        header("Location:performancepassion.html");
    }
    else{
        echo "Error ".$sql. "<br>".$conn->error;
    }
}
?>
</html>