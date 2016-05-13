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
                <a class="brand-logo center light" href="#">Courses & Colleges</a>
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
                            case "bio_ip": $sql2 = "SELECT ip, physics, chemistry, english, biology, sec_lang_name, second_lang FROM bio_ip ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "bio_language" : $sql2 = "SELECT biology, physics, chemistry, english, sec_lang_name, second_lang FROM bio_lang ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "bio_maths" : $sql2 = "SELECT maths, physics, chemistry, english, biology, sec_lang_name, second_lang FROM bio_maths ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "commerce_ip" : $sql2 = "SELECT maths, ip, commerce, accounts, business, sec_lang_name, second_lang FROM comm_ip ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "commerce_maths" : $sql2 = "SELECT maths, english, commerce, accounts, business, sec_lang_name, second_lang FROM comm_maths ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "computer_maths" : $sql2 = "SELECT maths, physics, chemistry, english, computer, sec_lang_name, second_lang FROM computer_maths ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "maths_ip" : $sql2 = "SELECT ip, physics, chemistry, english, maths, sec_lang_name, second_lang FROM maths_ip ORDER BY user_id DESC LIMIT 1";
                                break;
                            case "maths_language" : $sql2 = "SELECT maths, physics, chemistry, english, sec_lang_name, second_lang FROM maths_language ORDER BY user_id DESC LIMIT 1";
                                break;
                        }
                    $result2 = $conn->query($sql2);
                        if (!$result2) 
                        {
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }
                    $user_marks = mysqli_fetch_assoc($result2);
                    $cert1 = $_SESSION["certificate1"];
                    $cert2 = $_SESSION["certificate2"];
                    $cert3 = $_SESSION["certificate3"];
                    $maths = $physics = $chemistry = $biology = $ip = $commerce =$computer= $accounts = $business = $second_lang = $english = 0;
                    $sec_lang_name = "";
                    if(isset($user_marks["maths"]))
                        $maths = $user_marks["maths"];
                    if(isset($user_marks["physics"]))
                        $physics = $user_marks["physics"];
                    if(isset($user_marks["chemistry"]))
                        $chemistry = $user_marks["chemistry"];
                    if(isset($user_marks["biology"]))
                        $biology = $user_marks["biology"];
                    if(isset($user_marks["ip"]))
                        $ip = $user_marks["ip"];
                    if(isset($user_marks["commerce"]))
                        $commerce = $user_marks["commerce"];
                    if(isset($user_marks["computer"]))
                        $computer = $user_marks["computer"];
                    if(isset($user_marks["accounts"]))
                        $accounts = $user_marks["accounts"];
                    if(isset($user_marks["business"]))
                        $business = $user_marks["business"];
                    if(isset($user_marks["second_lang"]))
                        $second_lang = $user_marks["second_lang"];
                    if(isset($user_marks["sec_lang_name"]))
                        $sec_lang_name = $user_marks["sec_lang_name"];
                    if(isset($user_marks["english"]))
                        $english = $user_marks["english"];
                    if($user_details["school_board"]=="CBSE"||$user_details["school_board"]=="ICSE"){
                        $arts_board = ($maths + $physics + $chemistry + $biology + $ip + $commerce +$computer+ $accounts + $business + $english)/5;
                    }
                    else{
                        $arts_board = ($maths + $physics + $chemistry + $biology + $ip + $commerce +$computer+ $accounts + $business + $second_lang + $english)/6;
                    }
                    $arts_board_1=$arts_board*0.8;  //others  80%  
                    $arts_board_2=$arts_board*0.4;  //dance music   40%
                    $arts_cert = array("maths"=>"0", "chemistry"=>"0", "physics"=>"0",  "botany"=>"0", "zoology"=>"0", "english"=>"0", "commerce"=>"0", "computer"=>"0", "dance"=>"0", "music"=>"0", "hindi"=>"0", "malayalam"=>"0", "french"=>"0");
                    switch($cert1["subject"]){
                            case "maths" : $arts_cert["maths"]=$cert1["rank"];
                                             break;
                            case "chemistry" : $arts_cert["chemistry"]=$cert1["rank"];
                                             break;
                            case "physics" : $arts_cert["physics"]=$cert1["rank"];
                                             break;
                            case "botany" : $arts_cert["botany"]=$cert1["rank"];
                                             break;

                            case "zoology" : $arts_cert["zoology"]=$cert1["rank"];
                                             break;
                            case "english" : $arts_cert["english"]=$cert1["rank"];
                                             break;
                            case "commerce" : $arts_cert["commerce"]=$cert1["rank"];
                                             break;
                            case "computer" : $arts_cert["computer"]=$cert1["rank"];
                                             break;
                            case "dance" : $arts_cert["dance"]=$cert1["rank"];
                                             break;
                            case "music" : $arts_cert["music"]=$cert1["rank"];
                                             break;
                            case "hindi" : $arts_cert["hindi"]=$cert1["rank"];
                                             break;

                            case "malayalam" : $arts_cert["malayalam"]=$cert1["rank"];
                                             break;
                            case "french" : $arts_cert["french"]=$cert1["rank"];
                                             break;
                        }
                     if($cert2["subject"]==$cert1["subject"]){          //if cert2 same then take greater one
                        if($cert2["rank"]>$cert1["rank"]){
                            switch(cert2["subject"]){
                                    case "maths" : $arts_cert["maths"]=$cert2["rank"];
                                                    break;
                                    case "chemistry" : $arts_cert["chemistry"]=$cert2["rank"];
                                                     break;
                                    case "physics" : $arts_cert["physics"]=$cert2["rank"];
                                                     break;
                                    case "botany" : $arts_cert["botany"]=$cert2["rank"];
                                                     break;

                                    case "zoology" : $arts_cert["zoology"]=$cert2["rank"];
                                                     break;
                                    case "english" : $arts_cert["english"]=$cert2["rank"];
                                                     break;
                                    case "commerce" : $arts_cert["commerce"]=$cert2["rank"];
                                                     break;
                                    case "computer" : $arts_cert["computer"]=$cert2["rank"];
                                                     break;
                                    case "dance" : $arts_cert["dance"]=$cert2["rank"];
                                                     break;
                                    case "music" : $arts_cert["music"]=$cert2["rank"];
                                                     break;
                                    case "hindi" : $arts_cert["hindi"]=$cert2["rank"];
                                                     break;

                                    case "malayalam" : $arts_cert["malayalam"]=$cert2["rank"];
                                                     break;
                                    case "french" : $arts_cert["french"]=$cert2["rank"];
                                                     break;
                            }
                        }
                     }   
                     else{              //if cert2 different
                        switch($cert2["subject"])
                            {
                                case "maths" : $arts_cert["maths"]=$cert2["rank"];
                                                 break;
                                case "chemistry" : $arts_cert["chemistry"]=$cert2["rank"];
                                                 break;
                                case "physics" : $arts_cert["physics"]=$cert2["rank"];
                                                 break;
                                case "botany" : $arts_cert["botany"]=$cert2["rank"];
                                                 break;

                                case "zoology" : $arts_cert["zoology"]=$cert2["rank"];
                                                 break;
                                case "english" : $arts_cert["english"]=$cert2["rank"];
                                                 break;
                                case "commerce" : $arts_cert["commerce"]=$cert2["rank"];
                                                 break;
                                case "computer" : $arts_cert["computer"]=$cert2["rank"];
                                                 break;
                                case "dance" : $arts_cert["dance"]=$cert2["rank"];
                                                 break;
                                case "music" : $arts_cert["music"]=$cert2["rank"];
                                                 break;
                                case "hindi" : $arts_cert["hindi"]=$cert2["rank"];
                                                 break;

                                case "malayalam" : $arts_cert["malayalam"]=$cert2["rank"];
                                                 break;
                                case "french" : $arts_cert["french"]=$cert2["rank"];
                                                 break;

                            }
                     }
                     if(($cert3["subject"]==$cert1["subject"])||($cert3["subject"]==$cert2["subject"])){
                        if(($cert3["rank"]>$cert1["rank"])||($cert3["rank"]>$cert2["rank"])){
                            switch($cert3["subject"]){
                                    case "maths" : $arts_cert["maths"]=$cert3["rank"];
                                                    break;
                                    case "chemistry" : $arts_cert["chemistry"]=$cert3["rank"];
                                                     break;
                                    case "physics" : $arts_cert["physics"]=$cert3["rank"];
                                                     break;
                                    case "botany" : $arts_cert["botany"]=$cert3["rank"];
                                                     break;

                                    case "zoology" : $arts_cert["zoology"]=$cert3["rank"];
                                                     break;
                                    case "english" : $arts_cert["english"]=$cert3["rank"];
                                                     break;
                                    case "commerce" : $arts_cert["commerce"]=$cert3["rank"];
                                                     break;
                                    case "computer" : $arts_cert["computer"]=$cert3["rank"];
                                                     break;
                                    case "dance" : $arts_cert["dance"]=$cert3["rank"];
                                                     break;
                                    case "music" : $arts_cert["music"]=$cert3["rank"];
                                                     break;
                                    case "hindi" : $arts_cert["hindi"]=$cert3["rank"];
                                                     break;

                                    case "malayalam" : $arts_cert["malayalam"]=$cert3["rank"];
                                                     break;
                                    case "french" : $arts_cert["french"]=$cert3["rank"];
                                                     break;
                            }
                        }
                     }
                     else{   
                        switch($cert3["subject"])
                            {
                                case "maths" : $arts_cert["maths"]=$cert3["rank"];
                                                 break;
                                case "chemistry" : $arts_cert["chemistry"]=$cert3["rank"];
                                                 break;
                                case "physics" : $arts_cert["physics"]=$cert3["rank"];
                                                 break;
                                case "botany" : $arts_cert["botany"]=$cert3["rank"];
                                                 break;

                                case "zoology" : $arts_cert["zoology"]=$cert3["rank"];
                                                 break;
                                case "english" : $arts_cert["english"]=$cert3["rank"];
                                                 break;
                                case "commerce" : $arts_cert["commerce"]=$cert3["rank"];
                                                 break;
                                case "computer" : $arts_cert["computer"]=$cert3["rank"];
                                                 break;
                                case "dance" : $arts_cert["dance"]=$cert3["rank"];
                                                 break;
                                case "music" : $arts_cert["music"]=$cert3["rank"];
                                                 break;
                                case "hindi" : $arts_cert["hindi"]=$cert3["rank"];
                                                 break;
                                case "malayalam" : $arts_cert["malayalam"]=$cert3["rank"];
                                                 break;
                                case "french" : $arts_cert["french"]=$cert3["rank"];
                                                 break;
                            }
                     }
                    $arts_cert["maths"]*=4/3;
                    $arts_cert["chemistry"]*=4/3;
                    $arts_cert["physics"]*=4/3;
                    $arts_cert["botany"]*=4/3;                              //4/3--> 40%
                    $arts_cert["zoology"]*=4/3;                             //8/3--> 80%
                    $arts_cert["english"]*=4/3;
                    $arts_cert["commerce"]*=4/3;
                    $arts_cert["computer"]*=4/3;
                    $arts_cert["hindi"]*=4/3;
                    $arts_cert["malayalam"]*=4/3;
                    $arts_cert["french"]*=4/3;
                    $arts_cert["dance"]*=8/3;
                    $arts_cert["music"]*=8/3;
                    $lb = $ub = 0;
                    $passion_arts_course = $_SESSION["passion_arts_course"];
                    switch($passion_arts_course){
                            case "bsc_maths" :      $total = $arts_board_1+$arts_cert["maths"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "bsc_chemistry" :  $total = $arts_board_1+$arts_cert["chemistry"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "bsc_physics" :    $total = $arts_board_1+$arts_cert["physics"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "bsc_computer" :   $total = $arts_board_1+$arts_cert["computer"];
                                                    $lb = $total-14;
                                                    $ub = $total+14;
                                                    break;
                            case "bsc_botany" :     $total = $arts_board_1+$arts_cert["botany"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "bsc_zoology" :    $total = $arts_board_1+$arts_cert["zoology"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "bcom" :           $total = $arts_board_1+$arts_cert["commerce"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "ba_english" :     $total = $arts_board_1+$arts_cert["english"];
                                                    $lb = $total-7;
                                                    $ub = $total+7;
                                                    break;
                            case "ba_hindi" :       $total = $arts_board_1+$arts_cert["hindi"];
                                                    $lb = $total-16;
                                                    $ub = $total+16;
                                                    break;
                            case "ba_malayalam" :   $total = $arts_board_1+$arts_cert["malayalam"];
                                                    $lb = $total-11;
                                                    $ub = $total+11;
                                                    break;
                            case "ba_french" :      $total = $arts_board_1+$arts_cert["french"];
                                                    $lb = $total-24;
                                                    $ub = $total+120;
                                                    break;
                            case "ba_dance" :       $total = $arts_board_2+$arts_cert["dance"];
                                                    $lb = 24;
                                                    $ub = 120;
                                                    break;
                            case "ba_music" :       $total = $arts_board_2+$arts_cert["music"];
                                                    $lb = 24;
                                                    $ub = 120;
                                                    break;
                    }
                    switch($passion_arts_course){
                    case "bsc_maths" : $course_name = "Bsc. Maths";
                                            
                                            break;
                    case "bsc_chemistry" :  $course_name = "Bsc. Chemistry";
                                            
                                            break;
                    case "bsc_physics" :    $course_name = "Bsc. Physics";
                                            
                                            break;
                    case "bsc_computer" :  $course_name = "Bsc. Computer";
                                            
                                            break;
                    case "bsc_botany" :     $course_name = "Bsc. Botany";
                                            
                                            break;
                    case "bsc_zoology" :    $course_name = "Bsc. Zoology";
                                            
                                            break;
                    case "bcom" :          $course_name = "Bcom";

                                            break;
                    case "ba_english" :    $course_name = "Ba. English";
                                            
                                            break;
                    case "ba_hindi" :      $course_name = "Ba. Hindi";
                                            
                                            break;
                    case "ba_malayalam" :   $course_name = "Ba. Malayalam";
                                            
                                            break;
                    case "ba_french" :      $course_name = "Ba. French";
                                            
                                            break;
                    case "ba_dance" :       $course_name = "Ba. Dance";
                                            
                                            break;
                    case "ba_music" :       $course_name = "Ba. Music";
                                            
                                            break;
                    }
                    $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE $passion_arts_course BETWEEN $lb AND $ub ORDER BY college_id ASC";
                    $result = $conn->query($sql_college);
                    if ($result->num_rows > 0) {
                         echo "<tbody>";
                        $i=($result->num_rows)-1;
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" .(($result->num_rows)-$i). "</td><td>" . $row["college_id"]. "</td><td>" . $row["college_name"]."</td></tr>";
                         $i--;              //to print no.
                         }
                         echo "</tbody></table>";
                        echo "<br><br><div class=\"row\">
                <div class=\"col s4 offset-s4\"><p>Course Name:   ".$course_name."</p>
                </div>
            </div>";
                    } else {
                         echo "0 results";
                    }
                ?>
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

    

?>

