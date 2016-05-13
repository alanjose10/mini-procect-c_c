<?php
session_start();   
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ans = array();
    $ans = array_fill(0,31,0);
    $apt = array("maths"=>"0", "chemistry"=>"0", "physics"=>"0", "biology"=>"0", "botany"=>"0", "zoology"=>"0", "english"=>"0", "commerce"=>"0", "computer"=>"0", "dance"=>"0", "music"=>"0", "hindi"=>"0", "malayalam"=>"0", "french"=>"0");
    if(isset($_POST["q1"])){
        $ans[1] = $_POST["q1"];
    }
    if(isset($_POST["q2"])){
        $ans[2] = $_POST["q2"];
    }
    if(isset($_POST["q3"])){
        $ans[3] = $_POST["q3"];
    }
    if(isset($_POST["q4"])){
        $ans[4] = $_POST["q4"];
    }
    if(isset($_POST["q5"])){
        $ans[5] = $_POST["q5"];
    }
    if(isset($_POST["q6"])){
        $ans[6] = $_POST["q6"];
    }
    if(isset($_POST["q7"])){
        $ans[7] = $_POST["q7"];
    }
    if(isset($_POST["q8"])){
        $ans[8] = $_POST["q8"];
    }
    if(isset($_POST["q9"])){
        $ans[9] = $_POST["q9"];
    }
    if(isset($_POST["q10"])){
        $ans[10] = $_POST["q10"];
    }
    if(isset($_POST["q11"])){
        $ans[11] = $_POST["q11"];
    }
    if(isset($_POST["q12"])){
        $ans[12] = $_POST["q12"];
    }
    if(isset($_POST["q13"])){
        $ans[13] = $_POST["q13"];
    }
    if(isset($_POST["q14"])){
        $ans[14] = $_POST["q14"];
    }
    if(isset($_POST["q15"])){
        $ans[15] = $_POST["q15"];
    }
    if(isset($_POST["q16"])){
        $ans[16] = $_POST["q16"];
    }
    if(isset($_POST["q17"])){
        $ans[17] = $_POST["q17"];
    }
    if(isset($_POST["q18"])){
        $ans[18] = $_POST["q18"];
    }
    if(isset($_POST["q19"])){
        $ans[19] = $_POST["q19"];
    }
    if(isset($_POST["q20"])){
        $ans[20] = $_POST["q20"];
    }
    if(isset($_POST["q21"])){
        $ans[21] = $_POST["q21"];
    }
    if(isset($_POST["q22"])){
        $ans[22] = $_POST["q22"];
    }
    if(isset($_POST["q23"])){
        $ans[23] = $_POST["q23"];
    }
    if(isset($_POST["q24"])){
        $ans[24] = $_POST["q24"];
    }
    if(isset($_POST["q25"])){
        $ans[25] = $_POST["q25"];
    }
    if(isset($_POST["q26"])){
        $ans[26] = $_POST["q26"];
    }
    if(isset($_POST["q27"])){
        $ans[27] = $_POST["q27"];
    }
    if(isset($_POST["q28"])){
        $ans[28] = $_POST["q28"];
    }
    if(isset($_POST["q29"])){
        $ans[29] = $_POST["q29"];
    }
    if(isset($_POST["q30"])){
        $ans[30] = $_POST["q30"];
    }
$apt["maths"] = $ans[1] + $ans[2] + $ans[3];
$apt["chemistry"] = $ans[4] + $ans[5] + $ans[6];
$apt["physics"] = $ans[7] + $ans[8] + $ans[9];
$apt["biology"] = $ans[10] + $ans[11] + $ans[12];
$apt["botany"] = $ans[13] + $ans[14];
$apt["zoology"] = $ans[15] + $ans[16];
$apt["english"] = $ans[17] + $ans[18];
$apt["commerce"] = $ans[19] + $ans[20];
$apt["computer"] = $ans[21] + $ans[22];
$apt["dance"] = $ans[23];
$apt["music"] = $ans[24];
$apt["hindi"] = $ans[25] + $ans[26];
$apt["malayalam"] = $ans[27] + $ans[28];
$apt["french"] = $ans[29] + $ans[30];
$apt["total"] = $apt["maths"] + $apt["chemistry"] + $apt["physics"] + $apt["biology"] + $apt["botany"] + $apt["zoology"] + $apt["english"] + $apt["commerce"] + $apt["computer"] + $apt["dance"] + $apt["music"] + $apt["hindi"];
$_SESSION["aptitude"] = $apt;
header("Location:performance_certificate.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aptitude Test</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
        <meta charset="UTF-8">
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
            <div class="container center-align">
                <div class="row">
                    <div class="col s4 blue lighten-1 offset-s4 z-depth-1">
                        <p><h5 class="white-text light">Questions</h5></p> 
                    </div>
                </div>  
                <br>
            </div>
        <div class="row">
            <form class="col s12" method="post" action="<?php echo "$_SERVER[PHP_SELF]"; ?>">
                <ol>
                    <li>The sum of all 4 digit numbers containing the digis 2, 5, 6, 8 without repetitions is<br>
                    <p>
                        <input name="q1" type="radio" id="a1" value="0" />
                        <label for="a1">133330</label>
                    </p>
                    <p>
                    <input name="q1" type="radio" id="b1" value="0"/>
                    <label for="b1">122220</label>
                    </p>
                    <p>
                        <input name="q1" type="radio" id="c1" value="0"/>
                        <label for="c1">213330</label>
                    </p>
                    <p>
                    <input name="q1" type="radio" id="d1" value="10"/>
                    <label for="d1">133320</label>
                    </p>
                    </li>

                    <li>What is the maximum value of 5cos theta +12sin theta<br>
                    <p>
                        <input name="q2" type="radio" id="a2" value="0"/>
                        <label for="a2">12</label>
                    </p>
                    <p>
                    <input name="q2" type="radio" id="b2" value="0"/>
                    <label for="b2">15</label>
                    </p>
                    <p>
                        <input name="q2" type="radio" id="c2" value="10"/>
                        <label for="c2">13</label>
                    </p>
                    <p>
                    <input name="q2" type="radio" id="d2" value="0"/>
                    <label for="d2">17</label>
                    </p>
                    </li>

                    <li>The sum of all odd numbers between 200 and 300 is<br>
                    <p>
                        <input name="q3" type="radio" id="a3" value="0"/>
                        <label for="a3">11600</label>
                    </p>
                    <p>
                    <input name="q3" type="radio" id="b3" value="0"/>
                    <label for="b3">12490</label>
                    </p>
                    <p>
                        <input name="q3" type="radio" id="c3" value="10"/>
                        <label for="c3">12500</label>
                    </p>
                    <p>
                    <input name="q3" type="radio" id="d3" value="0"/>
                    <label for="d3">None of these</label>
                    </p>
                    </li>

                    <li>What are the values of n and l, for 4 f orbital?<br>
                    <p>
                        <input name="q4" type="radio" id="a4" value="10"/>
                        <label for="a4">n = 4, l = 3</label>
                    </p>
                    <p>
                    <input name="q4" type="radio" id="b4" value="0"/>
                    <label for="b4">n = 3, l = 4</label>
                    </p>
                    <p>
                        <input name="q4" type="radio" id="c4" value="0"/>
                        <label for="c4">n = 2, l = 4</label>
                    </p>
                    <p>
                    <input name="q4" type="radio" id="d4" value="0"/>
                    <label for="d4">n = 1, l = 2</label>
                    </p>
                    </li>

                    <li>What are the number of moles of CO2 which contains 16 g of oxygen?<br>
                    <p>
                        <input name="q5" type="radio" id="a5" value="10"/>
                        <label for="a5">0.5 mole</label>
                    </p>
                    <p>
                    <input name="q5" type="radio" id="b5" value="0"/>
                    <label for="b5">0.2 mole</label>
                    </p>
                    <p>
                        <input name="q5" type="radio" id="c5" value="0"/>
                        <label for="c5">0.4 mole</label>
                    </p>
                    <p>
                    <input name="q5" type="radio" id="d5" value="0"/>
                    <label for="d5">0.25 mole</label>
                    </p>
                    </li>

                    <li>The organic reaction represented by equation CH3 - CH = O + H2NOH gives CH3 - CH - NH + H2O is an example of<br>
                    <p>
                        <input name="q6" type="radio" id="a6" value="0"/>
                        <label for="a6">an addition reaction</label>
                    </p>
                    <p>
                    <input name="q6" type="radio" id="b6" value="10"/>
                    <label for="b6">a condensation reaction</label>
                    </p>
                    <p>
                        <input name="q6" type="radio" id="c6" value="0"/>
                        <label for="c6">an oxidation reaction</label>
                    </p>
                    <p>
                    <input name="q6" type="radio" id="d6" value="0"/>
                    <label for="d6">an elimination reaction</label>
                    </p>
                    </li>

                    <li>Large transformers, when used for some time, become very hot and are cooled by circulating oil. The heating of the transformer is due to<br>
                    <p>
                        <input name="q7" type="radio" id="a7" value="0"/>
                        <label for="a7">heating effect of current alone</label>
                    </p>
                    <p>
                    <input name="q7" type="radio" id="b7" value="0"/>
                    <label for="b7">hysteresis loss alone</label>
                    </p>
                    <p>
                        <input name="q7" type="radio" id="c7" value="10"/>
                        <label for="c7">both heating effect of current and hysteresis loss</label>
                    </p>
                    <p>
                    <input name="q7" type="radio" id="d7" value="0"/>
                    <label for="d7">intense sunlight at noon</label>
                    </p>
                    </li>

                    <li>Out of the following pairs, which one does not have identical dimension?<br>
                    <p>
                        <input name="q8" type="radio" id="a8" value="0"/>
                        <label for="a8">Work and Torque</label>
                    </p>
                    <p>
                    <input name="q8" type="radio" id="b8" value="10"/>
                    <label for="b8">Moment of inertia and moment of a force</label>
                    </p>
                    <p>
                        <input name="q8" type="radio" id="c8" value="0"/>
                        <label for="c8">Angular momentum and Planck's constant</label>
                    </p>
                    <p>
                    <input name="q8" type="radio" id="d8" value="0"/>
                    <label for="d8">Impulse and Momentum</label>
                    </p>
                    </li>

                    <li>An aeroplane is flying horizontally with a velocity of 600 km/h and at a height of 1960 m. When it is vertically at a point A on the ground a bomb is released from it. The bomb strikes the ground at point B. The distance AB is<br>
                    <p>
                        <input name="q9" type="radio" id="a9" value="0"/>
                        <label for="a9">1200 m</label>
                    </p>
                    <p>
                    <input name="q9" type="radio" id="b9" value="0"/>
                    <label for="b9">0.33km</label>
                    </p>
                    <p>
                        <input name="q9" type="radio" id="c9" value="10"/>
                        <label for="c9">3.33km</label>
                    </p>
                    <p>
                    <input name="q9" type="radio" id="d9" value="0"/>
                    <label for="d9">33 km</label>
                    </p>
                    </li>


                    <li>Photosynthesis is<br>
                    <p>
                        <input name="q10" type="radio" id="a10" value="0"/>
                        <label for="a10">reductive and exergonic</label>
                    </p>
                    <p>
                    <input name="q10" type="radio" id="b10" value="0"/>
                    <label for="b10">reductive and catabolic</label>
                    </p>
                    <p>
                        <input name="q10" type="radio" id="c10" value="0"/>
                        <label for="c10">reductive, endergonic and catabolic</label>
                    </p>
                    <p>
                    <input name="q10" type="radio" id="d10" value="10"/>
                    <label for="d10">reductive, endergonic and anabolic</label>
                    </p>
                    </li>

                    <li>Most abundant tissues of our body are<br>
                    <p>
                        <input name="q11" type="radio" id="a11" value="0"/>
                        <label for="a11">Muscular</label>
                    </p>
                    <p>
                    <input name="q11" type="radio" id="b11" value="10"/>
                    <label for="b11">Connective</label>
                    </p>
                    <p>
                        <input name="q11" type="radio" id="c11" value="0"/>
                        <label for="c11">Epithelial</label>
                    </p>
                    <p>
                    <input name="q11" type="radio" id="d11" value="0"/>
                    <label for="d11">Nervous</label>
                    </p>
                    </li>

                    <li>One day you wake with a sore throat and a runny nose. Your doctor takes a swab from your throat, sends it to a lab, and telephones you the next day to say that antibiotic will not help you get better. Which of the following is the most likely reason for the doctor's statement?<br>
                    <p>
                        <input name="q12" type="radio" id="a12" value="0"/>
                        <label for="a12">Having waited a day, it is too late to take an antibiotic</label>
                    </p>
                    <p>
                    <input name="q12" type="radio" id="b12" value="0"/>
                    <label for="b12">You need an antiseptic, not an antibiotic</label>
                    </p>
                    <p>
                        <input name="q12" type="radio" id="c12" value="0"/>
                        <label for="c12">You need to be vaccinated instead of taking an antibiotic</label>
                    </p>
                    <p>
                    <input name="q12" type="radio" id="d12" value="10"/>
                    <label for="d12">You are infected by a virus</label>
                    </p>
                    </li>

                    <li>In a flower, the upper part of a stamen containing pollen grains is<br>
                    <p>
                        <input name="q13" type="radio" id="a13" value="0"/>
                        <label for="a13">Tuber</label>
                    </p>
                    <p>
                    <input name="q13" type="radio" id="b13" value="0"/>
                    <label for="b13">Carpel</label>
                    </p>
                    <p>
                        <input name="q13" type="radio" id="c13" value="10"/>
                        <label for="c13">Anther</label>
                    </p>
                    <p>
                    <input name="q13" type="radio" id="d13" value="0"/>
                    <label for="d13">Root</label>
                    </p>
                    </li>

                    <li>Reproduction in which new organisms are formed from a single parent without gamete production is<br>
                    <p>
                        <input name="q14" type="radio" id="a14" value="0"/>
                        <label for="a14">Cartilage</label>
                    </p>
                    <p>
                    <input name="q14" type="radio" id="b14" value="10"/>
                    <label for="b14">Asexual reproduction</label>
                    </p>
                    <p>
                        <input name="q14" type="radio" id="c14" value="0"/>
                        <label for="c14">Egestion or defecation</label>
                    </p>
                    <p>
                    <input name="q14" type="radio" id="d14" value="0"/>
                    <label for="d14">Hermaphrodit</label>
                    </p>
                    </li>

                    <li>A chronic disease that can produce severe swelling of the joints is<br>
                    <p>
                        <input name="q15" type="radio" id="a15" value="0"/>
                        <label for="a15">Meningitis</label>
                    </p>
                    <p>
                    <input name="q15" type="radio" id="b15" value="0"/>
                    <label for="b15">Arthritis</label>
                    </p>
                    <p>
                        <input name="q15" type="radio" id="c15" value="10"/>
                        <label for="c15">Gout</label>
                    </p>
                    <p>
                    <input name="q15" type="radio" id="d15" value="0"/>
                    <label for="d15">None of the above</label>
                    </p>
                    </li>

                    <li>The period during which an embryo develops in the uterus of a mammal, from the time of conception to birth is called<br>
                    <p>
                        <input name="q16" type="radio" id="a16" value="0"/>
                        <label for="a16">Estrogen</label>
                    </p>
                    <p>
                    <input name="q16" type="radio" id="b16" value="10"/>
                    <label for="b16">Gestation period</label>
                    </p>
                    <p>
                        <input name="q16" type="radio" id="c16" value="0"/>
                        <label for="c16">Androgen</label>
                    </p>
                    <p>
                    <input name="q16" type="radio" id="d16" value="0"/>
                    <label for="d16">Embryo</label>
                    </p>
                    </li>

                     <li>Synonym of EMBEZZLE<br>
                    <p>
                        <input name="q17" type="radio" id="a17" value="10"/>
                        <label for="a17">Misappropriate</label>
                    </p>
                    <p>
                    <input name="q17" type="radio" id="b17" value="0"/>
                    <label for="b17">Balance</label>
                    </p>
                    <p>
                        <input name="q17" type="radio" id="c17" value="0"/>
                        <label for="c17">Remunerate</label>
                    </p>
                    <p>
                    <input name="q17" type="radio" id="d17" value="0"/>
                    <label for="d17">Clear</label>
                    </p>
                    </li>

                    <li>They felt safer<br>
                    P :to watch the mountain<br>
                    Q :of more than five miles<br>
                    R :as they settled down<br>
                    S :from a distance<br>
                    The Proper sequence should be:<br>
                    <p>
                        <input name="q18" type="radio" id="a18" value="10"/>
                        <label for="a18">RPSQ</label>
                    </p>
                    <p>
                    <input name="q18" type="radio" id="b18" value="0"/>
                    <label for="b18">RSQP</label>
                    </p>
                    <p>
                        <input name="q18" type="radio" id="c18" value="0"/>
                        <label for="c18">PQSR</label>
                    </p>
                    <p>
                    <input name="q18" type="radio" id="d18" value="0"/>
                    <label for="d18">PRSQ</label>
                    </p>
                    </li>

                    <li>Internal activity of a company is going to be performed according to established regulations. This assumption is provided as a right by<br>
                    <p>
                        <input name="q19" type="radio" id="a19" value="10"/>
                        <label for="a19">Doctrine of Indoor Management</label>
                    </p>
                    <p>
                    <input name="q19" type="radio" id="b19" value="0"/>
                    <label for="b19">Doctrine of Constructive Notice</label>
                    </p>
                    <p>
                        <input name="q19" type="radio" id="c19" value="0"/>
                        <label for="c19">Doctrine of Ultravires</label>
                    </p>
                    <p>
                    <input name="q19" type="radio" id="d19" value="0"/>
                    <label for="d19">Doctrine of Intravires</label>
                    </p>
                    </li>

                    <li>For how many years the book of accounts of a company have to be preserved in good order<br>
                    <p>
                        <input name="q20" type="radio" id="a20" value="10"/>
                        <label for="a20">For a period of not less than 8 years immediately preceding the current year</label>
                    </p>
                    <p>
                    <input name="q20" type="radio" id="b20" value="0"/>
                    <label for="b20">For a period of not less than 5 years immediately preceding the current year</label>
                    </p>
                    <p>
                        <input name="q20" type="radio" id="c20" value="0"/>
                        <label for="c20">For a period of not less than 6 years immediately preceding the current year</label>
                    </p>
                    <p>
                    <input name="q20" type="radio" id="d20" value="0"/>
                    <label for="d20">For a period of not less than 4 years immediately preceding the current year</label>
                    </p>
                    </li>

                    <li>The section of the CPU that selects, interprets and sees to the execution of program instructions<br>
                    <p>
                        <input name="q21" type="radio" id="a21" value="0"/>
                        <label for="a21">Memory</label>
                    </p>
                    <p>
                    <input name="q21" type="radio" id="b21" value="0"/>
                    <label for="b21">Register unit</label>
                    </p>
                    <p>
                        <input name="q21" type="radio" id="c21" value="10"/>
                        <label for="c21">Control unit</label>
                    </p>
                    <p>
                    <input name="q21" type="radio" id="d21" value="0"/>
                    <label for="d21">ALU</label>
                    </p>
                    </li>

                    <li>The examination and changing of single bits or small groups of bits within a word is called<br>
                    <p>
                        <input name="q22" type="radio" id="a22" value="0"/>
                        <label for="a22">Bit</label>
                    </p>
                    <p>
                    <input name="q22" type="radio" id="b22" value="0"/>
                    <label for="b22">Byte</label>
                    </p>
                    <p>
                        <input name="q22" type="radio" id="c22" value="0"/>
                        <label for="c22">Bit slice</label>
                    </p>
                    <p>
                    <input name="q22" type="radio" id="d22" value="10"/>
                    <label for="d22">Bit manipulation</label>
                    </p>
                    </li>

                    <li>Which Indian deity is known as lord of dance?<br>
                    <p>
                        <input name="q23" type="radio" id="a23" value="0"/>
                        <label for="a23">Lord Vishnu</label>
                    </p>
                    <p>
                    <input name="q23" type="radio" id="b23" value="0"/>
                    <label for="b23">Lord Brahma</label>
                    </p>
                    <p>
                        <input name="q23" type="radio" id="c23" value="0"/>
                        <label for="c23">Lord Indra</label>
                    </p>
                    <p>
                    <input name="q23" type="radio" id="d23" value="10"/>
                    <label for="d23">Lord Shiva</label>
                    </p>
                    </li>

                    <li>The "two great traditions" of Indian classical music are known by the terms<br>
                    <p>
                        <input name="q24" type="radio" id="a24" value="0"/>
                        <label for="a24">Raga and Tala</label>
                    </p>
                    <p>
                    <input name="q24" type="radio" id="b24" value="10"/>
                    <label for="b24">Hindustani and Carnatic</label>
                    </p>
                    <p>
                        <input name="q24" type="radio" id="c24" value="0"/>
                        <label for="c24">Filmi git and bhangra</label>
                    </p>
                    <p>
                    <input name="q24" type="radio" id="d24" value="0"/>
                    <label for="d24">Qawwali and bhajan</label>
                    </p>
                    </li>

                    <li>"तीन दिन मेहमान चौथे दिन हैवान" का क्या अर्थ है ?<br>
                    <p>
                        <input name="q25" type="radio" id="a25" value="10"/>
                        <label for="a25">अतिथि थोडे दिन का ही अच्छा होता है</label>
                    </p>
                    <p>
                    <input name="q25" type="radio" id="b25" value="0"/>
                    <label for="b25">अतिथि का कभी अपमान नही करना चाहिए</label>
                    </p>
                    <p>
                        <input name="q25" type="radio" id="c25" value="0"/>
                        <label for="c25">ससुराल में दामाद को अधिक दिन नही रहना चाहिए</label>
                    </p>
                    <p>
                    <input name="q25" type="radio" id="d25" value="0"/>
                    <label for="d25">इनमें से कोई नहीं  हप्पा</label>
                    </p>
                    </li>

                    <li>निम्न मे से कौनसा शब्द पुर्लिंग है ?<br>
                    <p>
                        <input name="q26" type="radio" id="a26" value="10"/>
                        <label for="a26">कपट</label>
                    </p>
                    <p>
                    <input name="q26" type="radio" id="b26" value="0"/>
                    <label for="b26">निंद्रा</label>
                    </p>
                    <p>
                        <input name="q26" type="radio" id="c26" value="0"/>
                        <label for="c26">मूर्खता</label>
                    </p>
                    <p>
                    <input name="q26" type="radio" id="d26" value="0"/>
                    <label for="d26">सुन्दरता</label>
                    </p>
                    </li>

                    <li>മലയാളത്തിലെ ഏറ്റവും വലിയ നോവല് ?<br>
                    <p>
                        <input name="q27" type="radio" id="a27" value="10"/>
                        <label for="a27">അഗ്നിസാക്ഷി</label>
                    </p>
                    <p>
                    <input name="q27" type="radio" id="b27" value="0"/>
                    <label for="b27">എതിര്പ്പുകള്</label>
                    </p>
                    <p>
                        <input name="q27" type="radio" id="c27" value="0"/>
                        <label for="c27">അവകാശികള്</label>
                    </p>
                    <p>
                    <input name="q27" type="radio" id="d27" value="0"/>
                    <label for="d27">കയര്</label>
                    </p>
                    </li>

                    <li>ജ്ഞാനപീഠപുരസ്കാരം നേടിയ ആദ്യ മലയാള കവി ?<br>
                    <p>
                        <input name="q28" type="radio" id="a28" value="10"/>
                        <label for="a28">ഒ.എന്.വി കുറുപ്പ്</label>
                    </p>
                    <p>
                    <input name="q28" type="radio" id="b28" value="0"/>
                    <label for="b28">എസ്.കെ പൊറ്റക്കാട്</label>
                    </p>
                    <p>
                        <input name="q28" type="radio" id="c28" value="0"/>
                        <label for="c28">ജി. ശങ്കരകുറുപ്പ്</label>
                    </p>
                    <p>
                    <input name="q28" type="radio" id="d28" value="0"/>
                    <label for="d28">തകഴി</label>
                    </p>
                    </li>             
                
                     
                    <li>Ils ont ... belle maison.<br>
                    <p>
                        <input name="q29" type="radio" id="a29" value="0"/>
                        <label for="a29">la</label>
                    </p>
                    <p>
                    <input name="q29" type="radio" id="b29" value="10"/>
                    <label for="b29">une</label>
                    </p>
                    <p>
                        <input name="q29" type="radio" id="c29" value="0"/>
                        <label for="c29">un</label>
                    </p>
                    <p>
                    <input name="q29" type="radio" id="d29" value="0"/>
                    <label for="d29">ce</label>
                    </p>
                    </li>

                    <li>Je mange beaucoup ... croissants.<br>
                    <p>
                        <input name="q30" type="radio" id="a30" value="0"/>
                        <label for="a30">des</label>
                    </p>
                    <p>
                    <input name="q30" type="radio" id="b30" value="0"/>
                    <label for="b30">les</label>
                    </p>
                    <p>
                        <input name="q30" type="radio" id="c30" value="10"/>
                        <label for="c30">de</label>
                    </p>
                    <p>
                    <input name="q30" type="radio" id="d30" value="0"/>
                    <label for="d30">la</label>
                    </p>
                    </li>
                
                </ol>                
             <div class="center">
                    <button class="btn waves-effect waves-light z-depth-3 blue accent-4" type="submit">
                        Submit
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