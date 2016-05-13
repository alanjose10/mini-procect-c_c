<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["passion_arts_course"] = $_POST["passion_arts_course"];
    $_SESSION["certificate1"] = array("subject"=>"", "rank"=>0);
    $_SESSION["certificate2"] = array("subject"=>"", "rank"=>0);
    $_SESSION["certificate3"] = array("subject"=>"", "rank"=>0);
    if((isset($_POST["subject1"]))&&isset($_POST["rank1"])){
    $_SESSION["certificate1"]["subject"] = $_POST["subject1"];
    $_SESSION["certificate1"]["rank"] = $_POST["rank1"];
    }
    if((isset($_POST["subject2"]))&&isset($_POST["rank2"])){
    $_SESSION["certificate2"]["subject"] = $_POST["subject2"];
    $_SESSION["certificate2"]["rank"] = $_POST["rank2"];
    }
    if((isset($_POST["subject3"]))&&isset($_POST["rank3"])){
    $_SESSION["certificate3"]["subject"] = $_POST["subject3"];
    $_SESSION["certificate3"]["rank"] = $_POST["rank3"];
    }
    header('Location:passion_arts_output.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Passion Certificate</title>
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
        <br>
        <div class="container center-align">
            <div class="row">
                <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                    <p><h5 class="white-text light">Certificates</h5></p> 
                </div>
            </div>  
            <br>
        </div>
        <br>
        <br>
         <div class="row">
            <form class="col s12" method="post" action="<?php echo "$_SERVER[PHP_SELF]"; ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <select name="subject1">
                            <option value="" disabled selected>Subject</option>
                            <option value="maths">Maths</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="physics">Physics</option>
                            <option value="biology">Biology</option>
                            <option value="botany">Botany</option>
                            <option value="zoology">Zoology</option>
                            <option value="english">English</option>
                            <option value="commerce">Commerce</option>
                            <option value="computer">Computer</option>
                            <option value="dance">Dance</option>
                            <option value="music">Music</option>
                            <option value="hindi">Hindi</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="french">French</option>
                        </select>
                        <label for="cert1">Certificate 1</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="rank1" type="radio" id="int1" value = "30"/>
                        <label for="int1">International</label>
                        <input name="rank1" type="radio" id="nat1" value = "20"/>
                        <label for="nat1">National</label>
                        <input name="rank1" type="radio" id="state1" value = "10"/>
                        <label for="state1">State</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="subject2">
                            <option value="" disabled selected>Subject</option>
                            <option value="maths">Maths</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="physics">Physics</option>
                            <option value="biology">Biology</option>
                            <option value="botany">Botany</option>
                            <option value="zoology">Zoology</option>
                            <option value="english">English</option>
                            <option value="commerce">Commerce</option>
                            <option value="computer">Computer</option>
                            <option value="dance">Dance</option>
                            <option value="music">Music</option>
                            <option value="hindi">Hindi</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="french">French</option>
                        </select>
                        <label for="cert1">Certificate 2</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="rank2" type="radio" id="int2" value = "30"/>
                        <label for="int2">International</label>
                        <input name="rank2" type="radio" id="nat2" value = "20"/>
                        <label for="nat2">National</label>
                        <input name="rank2" type="radio" id="state2" value = "10"/>
                        <label for="state2">State</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="subject3">
                            <option value="" disabled selected>Subject</option>
                            <option value="maths">Maths</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="physics">Physics</option>
                            <option value="biology">Biology</option>
                            <option value="botany">Botany</option>
                            <option value="zoology">Zoology</option>
                            <option value="english">English</option>
                            <option value="commerce">Commerce</option>
                            <option value="computer">Computer</option>
                            <option value="dance">Dance</option>
                            <option value="music">Music</option>
                            <option value="hindi">Hindi</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="french">French</option>
                        </select>
                        <label for="cert1">Certificate 3</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="rank3" type="radio" id="int3" value = "30"/>
                        <label for="int3">International</label>
                        <input name="rank3" type="radio" id="nat3" value = "20"/>
                        <label for="nat3">National</label>
                        <input name="rank3" type="radio" id="state3" value = "10"/>
                        <label for="state3">State</label>
                    </div>
                </div>
                <br>
                    <div class="container center-align">
                        <div class="row">
                            <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                                <p><h5 class="white-text light">Course</h5></p> 
                            </div>
                        </div>  
                        <br>
                    </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="passion_arts_course">
                            <option value="" disabled selected>Subject</option>
                            <option value="bsc_maths">Bsc. Maths</option>
                            <option value="bsc_chemistry">Bsc. Chemistry</option>
                            <option value="bsc_physics">Bsc. Physics</option>
                            <option value="bsc_computer">Bsc. Computer</option>
                            <option value="bsc_botany">Bsc. Botany</option>
                            <option value="bsc_zoology">Bsc. Zoology</option>
                            <option value="bcom">Bcom</option>
                            <option value="ba_english">Ba. English</option>
                            <option value="ba_hindi">Ba. Hindi</option>
                            <option value="ba_malayalam">Ba. Malayalam</option>
                            <option value="ba_french">Ba. French</option>
                            <option value="ba_dance">Ba. Dance</option>
                            <option value="ba_music">Ba. Music</option>
                        </select>
                        <label for="passion_arts_course">Arts Course</label>
                    </div>
                </div>
                <br>
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

</html>


