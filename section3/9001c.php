<?php
require '../db_qa.php';

   // echo"working in if";
$session_value = $_SESSION['nps2c'];

$array_count=count($session_value);
$counter=$_SESSION['nps2c_count'];
$route_no=$session_value[$counter];
if(isset($_POST['9001c_button'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q9001c";
dba_start($qid,$aid);
//dba ending
    $_SESSION['nps2c_count']=($counter+1);
    if ($counter >= $array_count) {
        echo "<script type='text/javascript'> location.href='../talha/RT1.php'</script>";

    } else {
        $nps_routes = array("01" => "1001c", "02" => "2001c", "03" => "3001c", "04" => "4001c", "05" => "5001c", "06" => "6001c",
            "07" => "7001c", "08" => "8001c", "09" => "9001c", "10" => "10001c", "11" => "11001c", "12" => "12001c",
            "13" => "13001c", "14" => "14001c", "15" => "15001c", "16" => "16001c", "17" => "17001c", "18" => "18001c"
        );

        $next = $nps_routes[$route_no] . ".php";
        echo "<script type='text/javascript'> location.href='$next'</script>";

    }


}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Neilsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
<section>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Neilsen Questionnaire</a>
    <form class="form-inline">
        <button class="btn btn-outline-success" type="button">View Answers</button>
    </form>
</nav>
        </section>

        <br><br>

        <div class="container">

            <h1>9001c RETAIL OUTLET EXPERIENCE</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q9001c :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Retail Outlet
                        Experience? [MA]</h6>
                    <br>
                    আপনিতো বললেন যে, বিক্রয়কেন্দ্রের অভিজ্ঞতার কারনে আপনি এই
                    অপারেটর সম্বন্ধে অন্যকে পরামর্শ দিবেন না? দয়া করে বলুন, বিক্রয়কেন্দ্রের অভিজ্ঞতা
                    সুনির্দিষ্ট কোন কোন কারনে আপনি অন্যকে পরামর্শ দিবেন না?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;height: auto">
                <div class="container">
 <form action="9001c.php" method="post">
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 40px; margin-left: 5px;">
                                <div class="col-md-12;">
                                    <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_male" value="9001" >
                                        <label class="form-check-label" for="gernder_radio1">
                                            General comment on retail outlets দোকান সম্পর্কে সাধারণ মন্তব্য

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_female" value="9002">
                                        <label class="form-check-label" for="gernder_radio2">
                                            Clarity of consultations সুস্পষ্ট পরামর্শ পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9003" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Speed of solving the problem দ্রুত সমস্যা সমাধান হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9004" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Store Ambience দোকানের পরিবেশ

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9005" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            It is easy to find the retail outlet দোকান খুজে পাওয়া সহজ

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9006" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Stores are available near me দোকান গুলো আমার বাসা/অফিসের কাছে

                                        </label>
                                    </div>
                                </div>
        
        
                                <div class="col-md-12">
        
        
                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9007" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Availability of up to date information regarding offers/promotions অফার/প্রচারণা সংক্রান্ত আপ টু ডেট তথ্য পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9008" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Availability of Scartch card and E-Recharge স্ক্রেচ কার্ড ও ই-রিচারজের উপস্থিতি/আছে

                                        </label>
                                    </div>
                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="9009" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Convenient conditions for waiting in offices (the presence of sofas, drinking water, air conditioning, etc.)
                                            অফিসে অপেক্ষা করার সময় প্রাপ্ত সুবিধা আছে (সোফা, পানি, এয়ার কন্ডিশনার ইত্যাদির উপস্থিতি)

                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                    
            </div>
        </div>

        <br>

        <div class="container">
            <div class="col-md-10">
                <button type="submit" name="9001c_button" style="float: right" class="btn btn-primary">Next Page</button>
            </div>
        </div>
        </form>
        <br><br><br>

        <section>
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="#"> nelson.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>
