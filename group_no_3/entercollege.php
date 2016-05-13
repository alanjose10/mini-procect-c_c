<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enter College</title>
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
                        <select name="college_type" type="text">
                            <option value="" disabled selected>Choose type of college</option>
                            <option value="engg">Engineering</option>
                            <option value="mbbs">Mbbs</option>
                            <option value="arts_science">Arts and Science</option>
                        </select>
                        <label>College Type</lable>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="college_name" type="text" class="validate">
                        <label for="college_name">College Name</label>
                    </div>
                </div>
                <br>
                    <div class="container center-align">
                        <div class="row">
                            <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                                <p><h5 class="white-text light">Engineering & MBBS</h5></p> 
                            </div>
                        </div>  
                        <br>
                    </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="last_rank" type="number" class="validate">
                        <label for="last_rank">Last Rank</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="benchmark" type="number" class="validate">
                        <label for="benchmark">Bench Mark</label>
                    </div>
                </div>
                <br>
                    <div class="container center-align">
                        <div class="row">
                            <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                                <p><h5 class="white-text light">Arts & Science</h5></p> 
                            </div>
                        </div>  
                        <br>
                    </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Maths:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_maths" type="number" class="validate">
                        <label for="bsc_maths">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Chemistry:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_chemistry" type="number" class="validate">
                        <label for="bsc_chemistry">Bench Mark</label>
                    </div>  
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Physics:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_physics" type="number" class="validate">
                        <label for="bsc_physics">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Computer:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_computer" type="number" class="validate">
                        <label for="bsc_computer">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Botany:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_botany" type="number" class="validate">
                        <label for="bsc_botany">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>BSc Zoology:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bsc_zoology" type="number" class="validate">
                        <label for="bsc_zoology">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Bcom:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="bcom" type="number" class="validate">
                        <label for="bcom">Bench Mark</label>
                    </div>                    
                </div>

                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba Dance:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_dance" type="number" class="validate">
                        <label for="ba_dance">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba Music:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_music" type="number" class="validate">
                        <label for="ba_music">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba English:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_english" type="number" class="validate">
                        <label for="ba_english">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba Hindi:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_hindi" type="number" class="validate">
                        <label for="ba_hindi">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba Malayalam:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_malayalam" type="number" class="validate">
                        <label for="ba_malayalam">Bench Mark</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <p>Ba French:</p>
                    </div>
                    <div class="input-field col s6">
                        <input name="ba_french" type="number" class="validate">
                        <label for="ba_french">Bench Mark</label>
                    </div>                    
                </div>
                <div class="center">
                    <button class="btn waves-effect waves-light z-depth-3 green accent-4" type="submit">
                        <i class="material-icons right">send</i>Submit
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
    $college_name = "";
    $last_rank = $benchmark = $bsc_maths = $bsc_chemistry = $bsc_physics = $bsc_computer = $bsc_botany = $bsc_zoology = $bcom = $ba_dance = $ba_music = $ba_english = $ba_hindi = $ba_malayalam = $ba_french = 0;
   if(isset($_POST["college_name"])){
    $college_name = $_POST["college_name"];
    } 
    if(isset($_POST["last_rank"])){
        $last_rank = $_POST["last_rank"];
    }
    if(isset($_POST["benchmark"])){
        $benchmark = $_POST["benchmark"];
    }
    if(isset($_POST["bsc_maths"])){
        $bsc_maths = $_POST["bsc_maths"];
    }
    if(isset($_POST["bsc_chemistry"])){
        $bsc_chemistry = $_POST["bsc_chemistry"];
    }
    if(isset($_POST["bsc_physics"])){
        $bsc_physics = $_POST["bsc_physics"];
    }
    if(isset($_POST["bsc_computer"])){
        $bsc_computer = $_POST["bsc_computer"];
    }
    if(isset($_POST["bsc_botany"])){
        $bsc_botany = $_POST["bsc_botany"];
    }
    if(isset($_POST["bsc_zoology"])){
        $bsc_zoology = $_POST["bsc_zoology"];
    }
    if(isset($_POST["bcom"])){
        $bcom = $_POST["bcom"];
    }
    if(isset($_POST["ba_dance"])){
        $ba_dance = $_POST["ba_dance"];
    }
    if(isset($_POST["ba_music"])){
        $ba_music = $_POST["ba_music"];
    }
    if(isset($_POST["ba_english"])){
        $ba_english = $_POST["ba_english"];
    }
    if(isset($_POST["ba_hindi"])){
        $ba_hindi = $_POST["ba_hindi"];
    }
    if(isset($_POST["ba_malayalam"])){
        $ba_malayalam = $_POST["ba_malayalam"];
    }
    if(isset($_POST["ba_french"])){
        $ba_french = $_POST["ba_french"];
    }
    switch ($_POST["college_type"]){
        case 'engg':$sql = "INSERT INTO engg_colleges(college_name,last_rank,benchmark) VALUES ('$college_name','$last_rank','$benchmark')";
                    break;
        case 'mbbs':$sql = "INSERT INTO mbbs(college_name,last_rank,benchmark) VALUES ('$college_name','$last_rank','$benchmark')";
                    break;
        case 'arts_science':$sql = "INSERT INTO arts_science(college_name,bsc_maths,bsc_chemistry,bsc_physics,bsc_botany,bsc_zoology,ba_english,bcom,bsc_computer,ba_dance,ba_music,ba_hindi,ba_malayalam,ba_french) VALUES ('$college_name','$bsc_maths','$bsc_chemistry','$bsc_physics','$bsc_botany','$bsc_zoology','$ba_english','$bcom','$bsc_computer','$ba_dance','$ba_music','$ba_hindi','$ba_malayalam','$ba_french')";
                            break;
    }
    if(mysqli_query($conn, $sql)){
        print "<p><h6>College successfully entered into database.</h6></p>";
    }
    else{
        echo "Error ".$sql. "<br>".$conn->error;
    }
}   
?>             
</html>