<?php
require '../db_qa.php';
   // echo"working in if";
$session_value = $_SESSION['nps2b'];

$array_count=count($session_value);
$counter=$_SESSION['nps2b_count'];
$route_no=$session_value[$counter];
if(isset($_POST['7001b_button'])){
      //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q7001b";
dba_start($qid,$aid);
//dba ending
    $_SESSION['nps2b_count']=($counter+1);
    if ($counter >= $array_count) {

        echo "<script type='text/javascript'> location.href='../talha/RT1.php'</script>";

    } else {
        $nps_routes = array("01" => "1001b", "02" => "2001b", "03" => "3001b", "04" => "4001b", "05" => "5001b", "06" => "6001b",
            "07" => "7001b", "08" => "8001b", "09" => "9001b", "10" => "10001b", "11" => "11001b", "12" => "12001b",
            "13" => "13001b", "14" => "14001b", "15" => "15001b", "16" => "16001b", "17" => "17001b", "18" => "18001b"
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

            <h1>7001b Data/ Internet service</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q7001b :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Data/ Internet Service?
                        [MA]</h6>
                    <br>আপনিতো বললেন যে, ইন্টারনেট সেবার কারনে আপনি এই অপারেটর সম্বন্ধে অন্যকে
                    পরামর্শ দিবেন? দয়া করে বলুন, ইন্টারনেট সেবা বিষয়ক সুনির্দিষ্ট কোন কোন কারনে
                    আপনি অন্যকে পরামর্শ দিবেন?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;height: auto">
                <div class="container">
<form action="7001b.php" method="post">
    <fieldset class="form-group">
        <div class="row" style="margin-top: 40px; margin-left: 5px;">
            <div class="col-md-12;">
                <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_male" value="7001" >
                    <label class="form-check-label" for="gernder_radio1">
                        General comment on Mobile Internet মোবাইল ইন্টারনেট সম্পর্কে সাধারণ মন্তব্য

                    </label>
                </div>
                <div class="form-check col-md-2" style="float: left;" >
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_female" value="7002">
                    <label class="form-check-label" for="gernder_radio2">
                        Mobile network quality- Fast data plan (internet) দ্রুত ইন্টারনেট ব্যাবহার করা যায়

                    </label>
                </div>
                <div class="form-check col-md-2" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7003" >
                    <label class="form-check-label" for="gernder_radio3">
                        3G network Coverage ৩জি/3G নেটওয়ার্ক কভারেজ/প্রাপ্যতা

                    </label>
                </div>
                <div class="form-check col-md-2" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7004" >
                    <label class="form-check-label" for="gernder_radio3">
                        3G network Quality 3G নেটওয়ার্কের মান(ভালো না খারাপ)

                    </label>
                </div>
                <div class="form-check col-md-2" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7005" >
                    <label class="form-check-label" for="gernder_radio3">
                        4G network Coverage ৪জি/4G নেটওয়ার্ক কভারেজ

                    </label>
                </div>
                <div class="form-check col-md-2" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7006" >
                    <label class="form-check-label" for="gernder_radio3">
                        4G network Quality 4G নেটওয়ার্কের মান(ভালো না খারাপ)

                    </label>
                </div>
            </div>


            <div class="col-md-12">


                <div class="form-check col-md-3" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7007" >
                    <label class="form-check-label" for="gernder_radio3">
                        Speed & connectivity of Mobile Internet মোবাইল ইন্টারনেটের গতি ও সংযোগ

                    </label>
                </div>
                <div class="form-check col-md-3" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7008" >
                    <label class="form-check-label" for="gernder_radio3">
                        Breaks or stops loading web pages / applications / files
                        ওয়েব পেজ/আপ্স/ফাইল খুললে সময় বেশি নেয় অথবা সংযোগ বিচ্ছিন্ন হয়ে যায়

                    </label>
                </div>
                <div class="form-check col-md-3" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7009" >
                    <label class="form-check-label" for="gernder_radio3">
                        Opportunity to use Mobile Internet everywhere মোবাইল ইন্টারনেট সব জায়গায় ব্যাবহার করার সুযোগ

                    </label>
                </div>
                <div class="form-check col-md-3" style="float: left;">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="7010" >
                    <label class="form-check-label" for="gernder_radio3">
                        Opening web pages and applications on the first try প্রথম চেষ্টায় ওয়েব পেজ এবং অ্যাপ্লিকেশন খোলা যায়

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
                <button type="submit" name="7001b_button" style="float: right" class="btn btn-primary">Next Page</button>
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