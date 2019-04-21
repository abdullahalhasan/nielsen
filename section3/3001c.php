<?php
require '../db_qa.php';
   // echo"working in if";
$session_value = $_SESSION['nps2c'];

$array_count=count($session_value);
$counter=$_SESSION['nps2c_count'];
$route_no=$session_value[$counter];
if(isset($_POST['3001c_button'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q3001c";
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

            <h1>3001c. PRICE &amp; TARIFF</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q3001c :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Price &amp; Tarrif?/ [MA]</h6> <br>আপনিতো বললেন যে, কথা বলার রেটের কারনে আপনি এই অপারেটর সম্বন্ধে অন্যকে
                    পরামর্শ দিবেন না? দয়া করে বলুন, কথা বলার রেট বিষয়ক সুনির্দিষ্ট কোন কোন কারনে
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
 <form action="3001c.php" method="post">
     <fieldset class="form-group">
         <div class="row" style="margin-top: 40px; margin-left: auto;">
             <div class="col-md-12;">
                 <div class="form-check col-md-2" style="float: left; ">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3001" value="3001" >
                     <label class="form-check-label" for="gernder_radio1">
                         General comment on Prices দামের উপর সাধারণ মন্তব্য

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;" >
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3002" value="3002">
                     <label class="form-check-label" for="gernder_radio2">
                         Calls Rate কল রেট

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3003" value="3003" >
                     <label class="form-check-label" for="gernder_radio3">
                         SMS Rate এসএমএস রেট

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3004" value="3004" >
                     <label class="form-check-label" for="gernder_radio3">
                         Bundle Rate বান্ডল রেট

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3005" value="3005" >
                     <label class="form-check-label" for="gernder_radio3">
                         Any comment related to Talk-Time Card টক-টাইম সম্পর্কিত যে কোন মন্তব্য

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3006" value="3006" >
                     <label class="form-check-label" for="gernder_radio3">
                         International Call Rate ইন্টারন্যাশনাল/আন্তরজাতিক কল রেট

                     </label>
                 </div>
             </div>


             <div class="col-md-12;">


                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3007" value="3007" >
                     <label class="form-check-label" for="gernder_radio3">
                         On-Net Call Rate অন-নেট কল রেট (একই অপারেটরের কল রেট)
                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3008" value="3008" >
                     <label class="form-check-label" for="gernder_radio3">
                         Off-Net Call Rate অফ-নেট কল রেট  (ভিন্ন অপারেটরের কল রেট)

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3009" value="3009" >
                     <label class="form-check-label" for="gernder_radio3">
                         Roaming Rate রোমিং রেট (বিদেশে থেকে দেশি অপারেটরের সিম ব্যবহারের রেট, যেমন কল বা এসএমএস এর খরচ)

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3010" value="3010" >
                     <label class="form-check-label" for="gernder_radio3">
                         Mobile Internet Roaming Rate মোবাইল ইন্টারনেট রোমিং রেট  ( বিদেশে থেকে দেশি অপারেটরের ইন্টারনেট সেবার রেট)

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3011" value="3011" >
                     <label class="form-check-label" for="gernder_radio3">
                         Mobile Data Rate মোবাইল ডেটা রেট


                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3012" value="3012" >
                     <label class="form-check-label" for="gernder_radio3">
                         Any comment related to Internet Card/MB Card ইন্টারনেট কার্ড/এমবি কার্ড সম্পর্কিত যে কোন মন্তব্য
                     </label>
                 </div>
             </div>

             <div class="col-md-12;">


                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3014" value="3013" >
                     <label class="form-check-label" for="gernder_radio3">
                         Cost of using / rental charges for additional services/ Charge for Balance Loan
                         অন্যান্য সেবার খরচ/ব্যাল্যান্স ধার করার চার্জ
                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3015" value="3014" >
                     <label class="form-check-label" for="gernder_radio3">
                         Price of SIM card/new connection সিম কার্ড/নতুন সংযোগের দাম

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3016" value="3015" >
                     <label class="form-check-label" for="gernder_radio3">
                         Rates of Value Added Services অন্যান্য সার্ভিস এর রেট

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3017" value="3016" >
                     <label class="form-check-label" for="gernder_radio3">
                         Friend and Family Rate(FNF) Call rate এফ এন এফ রেট

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3018" value="3017" >
                     <label class="form-check-label" for="gernder_radio3">
                         Payment for changing tariff plan ট্যারিফ পরিবর্তনের জন্য যে খরচ

                     </label>
                 </div>
                 <div class="form-check col-md-4" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3019" value="3018" >
                     <label class="form-check-label" for="gernder_radio3">
                         MMS rate এমএমএস রেট

                     </label>
                 </div>
             </div>



             <div class="col-md-12">


                 <div class="form-check col-md-4" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3020" value="3019" >
                     <label class="form-check-label" for="gernder_radio3">
                         International SMS Rate ইন্টারন্যাশনাল/আন্তরজাতিক এসএমএস রেট

                     </label>
                 </div>
                 <div class="form-check col-md-4" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="3021" value="3020" >
                     <label class="form-check-label" for="gernder_radio3">
                         Daily/monthly subscription fee rate দৈনিক / মাসিক সাবস্ক্রিপশন ফি

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
                <button type="submit" name="3001c_button" style="float: right" class="btn btn-primary">Next Page</button>
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
