<?php
require '../db_qa.php';
   // echo"working in if";
$session_value = $_SESSION['nps2a'];

$array_count=count($session_value);
$counter=$_SESSION['nps2a_count'];
$route_no=$session_value[$counter];
if(isset($_POST['asd'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q12001a";
dba_start($qid,$aid);
//dba ending
    $_SESSION['nps2a_count']=($counter+1);
    if($counter>=$array_count){
        echo "<script type='text/javascript'> location.href='../talha/RT1.php'</script>";
        //header('Location:../talha/RT1.php');

    }
    else{
        $nps_routes=array("01"=>"1001a","02"=>"2001a","03"=>"3001a","04"=>"4001a","05"=>"5001a","06"=>"6001a",
            "07"=>"7001a","08"=>"8001a","09"=>"9001a","10"=>"10001a","11"=>"11001a","12"=>"12001a",
            "13"=>"13001a","14"=>"14001a","15"=>"15001a","16"=>"16001a","17"=>"17001a","18"=>"18001a"
        );

        $next = $nps_routes[$route_no].".php";
        echo "<script type='text/javascript'> location.href='$next'</script>";
        //header("Location: ".$nps_routes[''.$route_no.''].".php");

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

            <h1>12001a BRAND REPUTATION </h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <h5>Q12001a :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Brand Reputation? [MA] </h6>
                    <br>আপনিতো বললেন যে,  ব্র্যান্ড/কম্পানীর সুনামের কারনে আপনি এই অপারেটর  সম্বন্ধে অন্যকে পরামর্শ দিবেন? দয়া করে বলুন,    ব্র্যান্ড/কম্পানীর সুনামের সুনির্দিষ্ট কোন কোন কারনে আপনি অন্যকে পরামর্শ দিবেন?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

<div class="container">
    <div class="col-md-12" style="border:1px solid;height: auto">
        <div class="container">
<form action="12001a.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px; margin-left: 5px;">
                        <div class="col-md-12;">
                            <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12001" value="12001" >
                                <label class="form-check-label" for="gernder_radio1">
                                    General comment on brand reputation ব্র্যান্ড খ্যাতি উপর সাধারণ মন্তব্য

                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;" >
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12002" value="12002">
                                <label class="form-check-label" for="gernder_radio2">
                                    Trustworthy company  কোম্পানিটি বিশ্বাসযোগ্য

                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12003" value="12003" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Reputation of the company কোম্পানির ভাবমূর্তি ভাল

                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12004" value="12004" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Reliable company কোম্পানিটি নির্ভরযোগ্য

                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12005" value="12005" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Provides the best customer service কোম্পানি খুব ভালোভাবে গ্রাহক সেবা/কাস্টোমার সার্ভিস দেয়

                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12006" value="12006" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Easy to deal with এদের সাথে সহজে কাজ/যোগাযোগ করতে পারি

                                </label>
                            </div>
                        </div>


                        <div class="col-md-12" style="margin-top: 25px">


                            <div class="form-check col-md-4" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12007" value="12007" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Offers latest advanced services - Innovative নতুন নতুন সুবিধা অফার করে

                                </label>
                            </div>
                            <div class="form-check col-md-4" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12008" value="12008" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Cares for me as a customer গ্রাহক হিসেবে আমার প্রতি যত্নশীল

                                </label>
                            </div>
                            <div class="form-check col-md-4" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="12009" value="12009" >
                                <label class="form-check-label" for="gernder_radio3">
                                    Company has an active social position কোম্পানির একটি সক্রিয় সামাজিক অবস্থান আছে

                                </label>
                            </div>
                            
                        </div>
                </fieldset>
       
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="form-group row float-right">
        <div class="col-md-10">
            <button type="submit" name="asd" class="btn btn-primary">Next Page</button>
        </div>
    </div>
</div>
<br>
</form>
<section>
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#"> neilsen.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</section>
</body>
</html>