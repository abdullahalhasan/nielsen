<?php
require '../db_qa.php';
   // echo"working in if";
$session_value = $_SESSION['nps2b'];

$array_count=count($session_value);
$counter=$_SESSION['nps2b_count'];
$route_no=$session_value[$counter];
if(isset($_POST['xyz'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q18001b";
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
            <p>Carefull: DO NO GO IN PREVIOUS</p>
                <button class="btn btn-outline-success" type="button">View Answers</button>
            </form>
        </nav>
        </section>

        <br><br>

        <div class="container">

            <h1>18001b SPAM SMS</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q18001b :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Spam SMS? [MA]</h6> 
                    <br>আপনিতো বললেন যে, অপ্রয়োজনীয় এসএমএস এর কারনে আপনি এই অপারেটর সম্বন্ধে
                    অন্যকে পরামর্শ দিবেন? দয়া করে বলুন, অপ্রয়োজনীয় এসএমএস এর সুনির্দিষ্ট কোন কোন
                    কারনে আপনি অন্যকে পরামর্শ দিবেন?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;height: auto">
                <div class="container">
<form action="18001b.php" method="post">
    <fieldset class="form-group">
        <div class="row" style="margin-top: 40px; margin-left: 5px;">
            <div class="col-md-12;">
                <div class="form-check col-md-4" style="float: left; padding-left: 5px;: ">
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="18001" value="18001" >
                    <label class="form-check-label" for="gernder_radio1">
                        Any comment regarding receiving unwanted sms and spam
                        অবাঞ্ছিত এসএমএস এবং স্প্যাম প্রাপ্তির সম্পর্কে কোন মন্তব্য

                    </label>
                </div>
                <div class="form-check col-md-4" style="float: left;" >
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="18002" value="18002">
                    <label class="form-check-label" for="gernder_radio2">
                        Too many sms from provider অপারেটর থেকে অতিরিক্ত এসএমএস আসে

                    </label>
                </div>
                <div class="form-check col-md-4" style="float: left;" >
                    <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="18003" value="18003">
                    <label class="form-check-label" for="gernder_radio2">
                        SMS from other companies অন্যান্য কোম্পানি থেকে এসএমএস

                    </label>
                </div>
            </div>
    </fieldset>

                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="col-md-10">
                <button type="submit" name="xyz" style="float: right" class="btn btn-primary">Next Page</button>
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
