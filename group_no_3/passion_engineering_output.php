<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Passion Result</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper blue lighten-1">
                <a class="brand-logo center light" href="index.php">Courses & Colleges</a>
            </div>
        </nav>
        </div>
        <br>
        <div class="container center-align">
            <div class="row">
                <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                    <p><h5 class="white-text light">User Details</h5></p> 
                </div>
            </div>
            <div class="row">
                <div class="col s4"><p>User ID:   <?php echo $_SESSION["user_id"]; ?></p>
                </div>
                <div class="col s8"><p>Name:   <?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col s4"><p>School Board:   <?php 
                                                        switch($_SESSION["school_board"]){
                                                            case "cbse": echo "CBSE";
                                                                        break;
                                                            case "state": echo "STATE";
                                                                        break;
                                                            case "icse": echo "ICSE ";
                                                                        break;
                                                        }
                                                         ?></p>
                </div>
                <div class="col s8"><p>School Stream:   <?php 
                                                        switch($_SESSION["school_stream"]){
                                                            case "bio_ip": echo "Bio IP";
                                                                        break;
                                                            case "bio_language": echo "Bio Language";
                                                                        break;
                                                            case "bio_maths": echo "Bio Maths";
                                                                        break;
                                                            case "commerce_ip": echo "Commerce IP";
                                                                        break;
                                                            case "commerce_maths": echo "Commerce Maths";
                                                                        break;
                                                            case "computer_maths": echo "Computer Maths";
                                                                        break;                                                                                                 case "maths_ip": echo "Maths IP";
                                                                        break;                           
                                                            case "maths_language": echo "Maths Language";
                                                                        break;                                                        }
                                                         ?></p>
                </div>
            </div>
            <br>
        </div>
        <div class="container center-align">
            <div class="row">
                <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                    <p><h5 class="white-text light">List of colleges</h5></p> 
                </div>
            </div>  
            <br>
        </div>
        <div class="container center-align">
        <div class="row">
            <div class="col s10 offset-s1" >
                <table class="bordered highlight centered responsive-table">
                <thead class="blue lighten-1">
                    <tr>
                        <th class="white-text light" data-field="no">No.</th>
                        <th class="white-text light" data-field="rank">Rank</th>
                        <th class="white-text light" data-field="college_name">College Name</th>
                    </tr>
                </thead>
                    <?php
                    require "dbconn.php";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error)
                        {
                            die("Connection failed: " . $conn->connect_error);     //print message and exit script
                        }
                    $sql1 = "SELECT first_name, last_name, email_id, school_board, school_stream FROM user_details ORDER BY user_id DESC LIMIT 1";
                    $result1 = $conn->query($sql1);
                        if (!$result1) 
                        {
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }
                    $user_details = mysqli_fetch_assoc($result1);
                    switch($user_details["school_stream"])
                        {
                            case "bio_ip": echo "<br>Sorry, the selected college stream is not possible with the school stream you have taken.<br><br>";
                                                  die();
                                                  break;
                            case "bio_language" : echo "<br>Sorry, the selected college stream is not possible with the school stream you have taken.<br><br>";
                                                  die();
                                                  break;
                            case "bio_maths" : $sql2 = "SELECT maths, physics, chemistry FROM bio_maths ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "commerce_ip" : echo "<br>Sorry, the selected college stream is not possible with the school stream you have taken.<br><br>";
                                                  die();
                                                  break;
                            case "commerce_maths" : echo "<br>Sorry, the selected college stream is not possible with the school stream you have taken.<br><br>";
                                                  die();
                                                  break;
                            case "computer_maths" : $sql2 = "SELECT maths, physics, chemistry FROM computer_maths ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "maths_ip" : $sql2 = "SELECT physics, chemistry, maths FROM maths_ip ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "maths_language" : $sql2 = "SELECT maths, physics, chemistry FROM maths_language ORDER BY user_id DESC LIMIT 1";
                                break;
                        }
                    $result2 = $conn->query($sql2);
                        if (!$result2) 
                        {
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }
                    $user_marks = mysqli_fetch_assoc($result2);
                    //print_r($user_details);
                    //print_r($user_marks);
                    $maths = $physics = $chemistry = 0;
                    $engg = 0;
                    $total = 0;
                    if(isset($user_marks["maths"]))
                        $maths = $user_marks["maths"];
                    if(isset($user_marks["physics"]))
                        $physics = $user_marks["physics"];
                    if(isset($user_marks["chemistry"]))
                        $chemistry = $user_marks["chemistry"];
                    $engg_board = ($maths + $physics + $chemistry);
                    //echo "<br>";
                    //echo $engg_board;
                    $total=$engg_board*0.4;     //300-->120
                    $lb = $total - 7;
                    $ub = $total + 7;
                    $sql_passion = "SELECT college_id, college_name FROM engg_colleges WHERE benchmark BETWEEN $lb AND $ub  ORDER BY college_id ASC";
                    $result = $conn->query($sql_passion);
                      if ($result->num_rows > 0) {
                         echo "<tbody>";
                        $i=($result->num_rows)-1;
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" .(($result->num_rows)-$i). "</td><td>" . $row["college_id"]. "</td><td>" . $row["college_name"]."</td></tr>";
                         $i--;              //to print no.
                         }
                         echo "</tbody></table>";
                    } else {
                         echo "0 results";
                    }
                ?>
            </div>
        </div>
        <br><br><div class="row">
                <div class="col s4 offset-s4"><p>Course Name:   Engineering</p>
                </div>
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