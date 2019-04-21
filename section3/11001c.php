<?php
require '../db_qa.php';

   // echo"working in if";
$session_value = $_SESSION['nps2c'];

$array_count=count($session_value);
$counter=$_SESSION['nps2c_count'];
$route_no=$session_value[$counter];
if(isset($_POST['11001c_button'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q11001c";
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

            <h1>11001c WEBSITE</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q11001c :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Website? [MA]</h6>
                    <br>
                    আপনিতো বললেন যে, ওয়েব সাইটের অভিজ্ঞতার কারনে আপনি এই অপারেটর সম্বন্ধে
                    অন্যকে পরামর্শ দিবেন না? দয়া করে বলুন, ওয়েব সাইটের সুনির্দিষ্ট কোন কোন কারনে
                    আপনি অন্যকে পরামর্শ দিবেন না?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>
        <div class="container">
            <div class="col-md-10" style="border:1px solid;height: auto">
                <div class="container">
<form action="11001c.php" method="post">
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 40px; margin-left: 5px;">
                                <div class="col-md-12;">
                                    <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_male" value="11001" >
                                        <label class="form-check-label" for="gernder_radio1">
                                            General comment on website ওয়েবসাইট সম্পর্কে সাধারণ মন্তব্য

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_female" value="11002">
                                        <label class="form-check-label" for="gernder_radio2">
                                            Look and Feel of the website দেখতে ওয়েবসাইটের মত

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11003" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to find what I am looking for আমি সহজেই যেটা চাচ্ছি সেটা খুঁজে পাই

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11004" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Availability of necessary information on the website ওয়েবসাইটে প্রয়োজনীয় তথ্য পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11005" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Accessing my account ব্যক্তিগত অ্যাকাউন্টের মাধ্যমে  সহজেই নিজের বিস্তারিত খরচের হিসাব পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11006" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to obtain a detailed expense report via the personal account
                                            সহজে ব্যাক্তিগত একাউন্ট ব্যাবহার করা যায়

                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-12">


                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11007" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to use the personal account অনলাইন পেমেন্ট করা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11008" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Make payments online দ্রুত চ্যাট করা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11009" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Chat service speed চ্যাট সেবাটি সুবিধাজনক

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11010" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Chat service helpfulness চ্যাট সেবাটি সুবিধাজনক

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11011" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Recharge is available রিচারজ পয়েন্ট সহজেই পাওয়া যায়/  মোবাইল টাকা ঢোকানো সহজ

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11012" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to receive help on social media networks
                                            এই অপারেটরের সামাজিক মিডিয়া নেটওয়ার্ক/পেজ থেকে সহজেই সাহায্য পাওয়া যায়

                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-12">


                                    <div class="form-check col-md-3" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11013" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            The availability of the necessary information on social media page(s)
                                            সসিয়াল মিডিয়া সংক্রান্ত তথ্য পাওয়া যায়


                                    </div>
                                    <div class="form-check col-md-3" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11014" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Regular availability of new offers and promotions on social media page(s) এই অপারেটরের সামাজিক মিডিয়া নেটওয়ার্ক/পেজে নতুন অফার এবং প্রচারনার উপস্থিতি/আছে

                                        </label>
                                        </label>
                                    </div>
                                    <div class="form-check col-md-3" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11015" >
                                        <label class="form-check-label" for="gernder_radio3">

                                            Administrator prompt interactivity with social media page(s) এই অপারেটরের সামাজিক মিডিয়া নেটওয়ার্ক/পেজের এডমিন/পরিচালনাকারির সাথে সহজেই যোগাযোগ করা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-3" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="11016" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Speed of loading the website ওয়েবসাইট দ্রুত লোড হয়

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                   
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="col-md-10">
                <button type="submit" name="11001c_button" style="float: right" class="btn btn-primary">Next Page</button>
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
