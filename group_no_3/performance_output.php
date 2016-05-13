<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Performance Result</title>
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
                                                         ?></p></p>
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
                        <th class="white-text light"data-field="no">No.</th>
                        <th class="white-text light"data-field="rank">Rank</th>
                        <th class="white-text light"data-field="college_name">College Name</th>
                    </tr>
                </thead>
                <?php
                    require "dbconn.php";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error){
                            die("Connection failed: " . $conn->connect_error);     //print message and exit script
                        }
                    $sql1 = "SELECT first_name, last_name, email_id, school_board, school_stream FROM user_details ORDER BY user_id DESC LIMIT 1";
                    $result1 = $conn->query($sql1);
                        if (!$result1) {
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }
                    $user_details = mysqli_fetch_assoc($result1);
                    //print_r($user_details);
                    switch($user_details["school_stream"]){
                        case "bio_ip": $sql2 = "SELECT ip, physics, chemistry, english, biology, sec_lang_name, second_lang FROM bio_ip ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "bio_language" : $sql2 = "SELECT biology, physics, chemistry, english, sec_lang_name, second_lang FROM bio_lang ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "bio_maths" : $sql2 = "SELECT maths, physics, chemistry, english, biology, sec_lang_name, second_lang FROM bio_maths ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "commerce_ip" : $sql2 = "SELECT maths, ip, commerce, accounts, business, sec_lang_name, second_lang FROM commerce_ip ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "commerce_maths" : $sql2 = "SELECT maths, english, commerce, accounts, business, sec_lang_name, second_lang FROM commerce_maths ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "computer_maths" : $sql2 = "SELECT maths, physics, chemistry, english, computer, sec_lang_name, second_lang FROM computer_maths ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "maths_ip" : $sql2 = "SELECT ip, physics, chemistry, english, maths, sec_lang_name, second_lang FROM maths_ip ORDER BY user_id DESC LIMIT 1";
                            break;
                        case "maths_language" : $sql2 = "SELECT maths, physics, chemistry, english, sec_lang_name, second_lang FROM maths_language ORDER BY user_id DESC LIMIT 1";
                            break;
                    }
                    $result2 = $conn->query($sql2);
                        if (!$result2) {
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }
                    $user_marks = mysqli_fetch_assoc($result2);
                    //print_r($user_marks);
                    $aptitude = $_SESSION["aptitude"];
                    $cert1 = $_SESSION["certificate1"];
                    $cert2 = $_SESSION["certificate2"];
                    $cert3 = $_SESSION["certificate3"];
                    $maths = $physics = $chemistry = $biology = $ip = $commerce =$computer= $accounts = $business = $second_lang = $english = 0;
                    $sec_lang_name = "";
                    $engg = $mbbs = $arts_board=$arts_cert[][]=$engg_cert=$engg_board=$engg_cert=$bscmaths = 0;
                    //print_r($aptitude);
                    //print_r($cert1);
                    //print_r($cert2);
                    //print_r($cert3);
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

                    $engg_board = $engg_cert = $engg_apti = $engg = $mbbs_board = $mbbs_cert = $mbbs_apti = $mbbs = $arts_board = 0;

                    //Engineering
                    $engg_board = ($maths + $physics + $chemistry)/3;   //300-->100
                    $engg_apti=(($aptitude["maths"]+$aptitude["chemistry"]+$aptitude["physics"])*10/9);  //90-->100
                    if($cert1["subject"]=="maths"||$cert1["subject"]=="chemistry"||$cert1["subject"]=="physics"){
                        $engg_cert=$cert1["rank"];
                    }
                    if($cert2["subject"]=="maths"||$cert2["subject"]=="chemistry"||$cert2["subject"]=="physics"){
                        $engg_cert+=$cert2["rank"];
                    }
                    if($cert3["subject"]=="maths"||$cert3["subject"]=="chemistry"||$cert3["subject"]=="physics"){
                        $engg_cert+=$cert3["rank"];
                    }
                    $engg_cert = $engg_cert*10/9;  //90-->100
                    $engg=($engg_board*0.6)+($engg_apti*0.4)+($engg_cert*0.2);

                    //Mbbs
                    $mbbs_board = ($biology + $physics + $chemistry)/3;     //300-->100
                    $mbbs_apti=(($aptitude["biology"]+$aptitude["chemistry"]+$aptitude["physics"])*10/9);    //90-->100
                    if($cert1["subject"]=="biology"||$cert1["subject"]=="chemistry"||$cert1["subject"]=="physics"){
                        $mbbs_cert=$cert1["rank"];
                    }
                    if($cert2["subject"]=="biology"||$cert2["subject"]=="chemistry"||$cert2["subject"]=="physics"){
                        $mbbs_cert+=$cert2["rank"];
                    }
                    if($cert3["subject"]=="biology"||$cert3["subject"]=="chemistry"||$cert3["subject"]=="physics"){
                        $mbbs_cert+=$cert3["rank"];
                    }
                    $mbbs_cert = $mbbs_cert*10/9;    //90-->100
                    $mbbs=($mbbs_board*0.6)+($mbbs_apti*0.4)+($mbbs_cert*0.2);

                    //--------Arts----------
                    if(($user_details["school_board"]=="cbse")||($user_details["school_board"]=="icse")){
                        $arts_board = ($maths + $physics + $chemistry + $biology + $ip + $commerce +$computer+ $accounts + $business + $english)/5;     //100
                    }
                    else{
                        $arts_board = ($maths + $physics + $chemistry + $biology + $ip + $commerce +$computer+ $accounts + $business + $second_lang + $english)/6;  //100
                    }
                    //Arts certificate
                    $arts_cert = array("maths"=>"0", "chemistry"=>"0", "physics"=>"0", "biology"=>"0", "botany"=>"0", "zoology"=>"0", "english"=>"0", "commerce"=>"0", "computer"=>"0", "dance"=>"0", "music"=>"0", "hindi"=>"0", "malayalam"=>"0", "french"=>"0");
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
                    foreach($arts_cert as $v){      //30-->100
                        $v = $v*10/3;
                    }
                    //Arts aptitude
                    $bscmaths_apti=$aptitude["maths"]*10/3;     //30-->100
                    $bscchemistry_apti=$aptitude["chemistry"]*10/3;     //30-->100
                    $bscphysics_apti=$aptitude["physics"]*10/3;     //30-->100
                    //$bscbiology_apti=$aptitude["biology"]*10/3;     //30-->100
                    $bscbotany_apti=$aptitude["botany"]*5;     //20-->100
                    $bsczoology_apti=$aptitude["zoology"]*5;     //20-->100
                    $baenglish_apti=$aptitude["english"]*5;     //20-->100
                    $bcom_apti=$aptitude["commerce"]*5;     //20-->100
                    $bsccomputer_apti=$aptitude["computer"]*5;     //20-->100
                    $badance_apti=$aptitude["dance"]*10;        //10-->100
                    $bamusic_apti=$aptitude["music"]*10;        //10-->100
                    $bahindi_apti=$aptitude["hindi"]*5;     //20-->100
                    $bamalayalam_apti=$aptitude["malayalam"]*5;     //20-->100
                    $bafrench_apti=$aptitude["french"]*5;     //20-->100

                    $bsc_maths = $arts_board*0.5 + $arts_cert["maths"]*0.4 + $bscmaths_apti*0.3;
                    $bsc_chemistry = $arts_board*0.5 + $arts_cert["chemistry"]*0.4 + $bscchemistry_apti*0.3; 
                    $bsc_physics = $arts_board*0.5 + $arts_cert["physics"]*0.4 + $bscphysics_apti*0.3;
                    //$bsc_biology = $arts_board*0.5 + $arts_cert["biology"]*0.4 + $bscbiology_apti*0.3;
                    $bsc_computer = $arts_board*0.6 + $arts_cert["computer"]*0.4 + $bsccomputer_apti*0.2;
                    $bsc_botany = $arts_board*0.6 + $arts_cert["botany"]*0.4 + $bscbotany_apti*0.2;
                    $bsc_zoology = $arts_board*0.6 + $arts_cert["zoology"]*0.4 + $bsczoology_apti*0.2;
                    $bcom = $arts_board*0.6 + $arts_cert["commerce"]*0.4 + $bcom_apti*0.2;
                    $ba_english = $arts_board*0.6 + $arts_cert["english"]*0.4 + $baenglish_apti*0.2;
                    $ba_hindi = $arts_board*0.6 + $arts_cert["hindi"]*0.4 + $bahindi_apti*0.2;
                    $ba_malayalam = $arts_board*0.6 + $arts_cert["malayalam"]*0.4 + $bamalayalam_apti*0.2;
                    $ba_french = $arts_board*0.6 + $arts_cert["french"]*0.4 + $bafrench_apti*0.2;
                    $ba_dance = $arts_board*0.3 + $arts_cert["dance"]*0.7 + $badance_apti*0.2;
                    $ba_music = $arts_board*0.3 + $arts_cert["music"]*0.7 + $bamusic_apti*0.2;

                    $final_decision = array();
                    $final_decision["engg"] = $engg;
                    $final_decision["mbbs"] = $mbbs;
                    $final_decision["bsc_maths"] = $bsc_maths;
                    $final_decision["bsc_chemistry"] = $bsc_chemistry;
                    $final_decision["bsc_physics"] = $bsc_physics;
                    //$final_decision["bsc_biology"] = $bsc_biology;     NOT THERE!
                    $final_decision["bsc_computer"] = $bsc_computer;
                    $final_decision["bsc_botany"] = $bsc_botany;
                    $final_decision["bsc_zoology"] = $bsc_zoology;
                    $final_decision["bcom"] = $bcom;
                    $final_decision["ba_english"] = $ba_english;
                    $final_decision["ba_hindi"] = $ba_hindi;
                    $final_decision["ba_malayalam"] = $ba_malayalam;
                    $final_decision["ba_french"] = $ba_french;
                    $final_decision["ba_dance"] = $ba_dance;
                    $final_decision["ba_music"] = $ba_music;
                    //foreach($final_decision as $v)
                    //    echo "<br>".$v;
                    $max_total = max($final_decision);
                    //echo "<br>".array_search(max($final_decision), $final_decision);
                    $final_stream = array_search(max($final_decision), $final_decision);

                    switch($final_stream){
                        case "engg" :   $lb = $max_total-7;
                                        $ub = $max_total+7;
                                        $sql_college = "SELECT college_id, college_name from engg_colleges WHERE benchmark BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                        break;
                        case "mbbs" :   $lb = $max_total-11;
                                        $ub = $max_total+11;
                                        $sql_college = "SELECT college_id, college_name from mbbs WHERE benchmark BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                        break;
                        case "bsc_maths" : 
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_maths BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bsc_chemistry" :  
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_chemistry BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bsc_physics" :    
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_physics BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bsc_computer" :  
                                            $lb = $max_total-14;
                                            $ub = $max_total+14;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_computer BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bsc_botany" :     
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_botany BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bsc_zoology" :    
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bsc_zoology BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "bcom" :          
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE bcom BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_english" :    
                                            $lb = $max_total-7;
                                            $ub = $max_total+7;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_english BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_hindi" :      
                                            $lb = $max_total-16;
                                            $ub = $max_total+16;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_hindi BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_malayalam" :   
                                            $lb = $max_total-11;
                                            $ub = $max_total+11;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_malayalam BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_french" :      
                                            $lb = 24;
                                            $ub = 120;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_french BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_dance" :       
                                            $lb = 24;
                                            $ub = 120;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_dance BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    case "ba_music" :       
                                            $lb = 24;
                                            $ub = 120;
                                            $sql_college = "SELECT DISTINCT college_id, college_name FROM arts_science WHERE ba_music BETWEEN $lb AND $ub ORDER BY college_id ASC";
                                            break;
                    }
                    switch($final_stream){
                        case "engg" :   $course_name = "Engineering";
                                        break;
                        case "mbbs" :   $course_name = "Mbbs";
                                        break;
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
                    $result = $conn->query($sql_college);
                    if ($result->num_rows > 0) {
                         echo "<tbody>";
                        $i=($result->num_rows)-1;
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" .(($result->num_rows)-$i). "</td><td>" . $row["college_id"]. "</td><td>" . $row["college_name"]."</td></tr>";
                         $i--;              //to print no.
                         }
                         echo "</tbody></table>";
                        echo "            <br><br><div class=\"row\">
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