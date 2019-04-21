<?php
require '../db_qa.php';
   // echo"working in if";
$session_value = $_SESSION['nps2c'];

$array_count=count($session_value);
$counter=$_SESSION['nps2c_count'];
$route_no=$session_value[$counter];
if(isset($_POST['8001c_button'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q8001c";
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

            <h1>8001c OFFER</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q8001c :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on offer? [MA]</h6>
                    <br>
                    আপনিতো বললেন যে, বিভিন্ন অফারের কারনে আপনি এই অপারেটর সম্বন্ধে অন্যকে
                    পরামর্শ দিবেন না? দয়া করে বলুন, বিভিন্ন অফার বিষয়ক সুনির্দিষ্ট কোন কোন কারনে
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
 <form action="8001c.php" method="post">
     <fieldset class="form-group">
         <div class="row" style="margin-top: 40px; margin-left: 5px;">
             <div class="col-md-12;">
                 <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8001" value="8001" >
                     <label class="form-check-label" for="gernder_radio1">
                         General comment on Offers অফার সম্পর্কে সাধারণ মন্তব্য

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;" >
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8002" value="8002">
                     <label class="form-check-label" for="gernder_radio2">
                         Comprehensive range of plans/ packages বিভিন্ন রকম অফার/প্যাকেজ আছে

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8003" value="8003" >
                     <label class="form-check-label" for="gernder_radio3">
                         Simple and clear tariffs ট্যারিফ গুলো স্পষ্ট এবং সহজে বোঝা যায়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8004" value="8004" >
                     <label class="form-check-label" for="gernder_radio3">
                         Availability of services that provide cost control
                         এমন সেবা আছে যা ব্যবহার করে খরচ নিয়ন্ত্রণ করা যায়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8005" value="8005" >
                     <label class="form-check-label" for="gernder_radio3">
                         Plans/ packages suited to customer’s needs প্যাকেজগুলো গ্রাহক চাহিদার জন্য উপযুক্ত

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8006" value="8006" >
                     <label class="form-check-label" for="gernder_radio3">
                         Wide range of mobile internet data packages বিভিন্ন রকমের মোবাইল ইন্টারনেট প্যাকেজ আছে

                     </label>
                 </div>
             </div>


             <div class="col-md-12">


                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8007" value="8007" >
                     <label class="form-check-label" for="gernder_radio3">
                         Enough GB on the plan প্যাকেজে যথেষ্ট পরিমানে ডাটা/জিবি আছে

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8008" value="8008" >
                     <label class="form-check-label" for="gernder_radio3">
                         Availability of free minutes on the plan প্যাকেজে ফ্রি মিনিটের উপস্থিতি/আছে

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8009" value="8009" >
                     <label class="form-check-label" for="gernder_radio3">
                         Different plans and offers are simple and easy to understand
                         বিভিন্ন রকমের প্যাকেজের অফার গুলো সহজে বোঝা যায়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8010" value="8010" >
                     <label class="form-check-label" for="gernder_radio3">
                         Interesting and reliable handsets offered আকর্ষণীয় এবং নির্ভরযোগ্য(ভাল মানের) হ্যান্ডসেট অফার করে

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8011" value="8011" >
                     <label class="form-check-label" for="gernder_radio3">
                         Variety of handsets offered বিভিন্ন রকমের হান্ডসেট অফার করা হয়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8012" value="8012" >
                     <label class="form-check-label" for="gernder_radio3">
                         Wide range of additional services offered (e.g. call waiting, missed call notification, etc.)
                         বিভিন্ন রকমের সেবা সুবিধা অফার করা হয়

                     </label>
                 </div>
             </div>


             <div class="col-md-12">


                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8013" value="8013" >
                     <label class="form-check-label" for="gernder_radio3">
                         Additional services are easy to connect, configure and disable
                         অন্যান্য সেবাগুলো খুব সহজে চালু, ব্যাবহার এবং বন্ধ করা যায়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8014" value="8014" >
                     <label class="form-check-label" for="gernder_radio3">
                         Convenient installment scheme for handsets and other devices
                         হ্যান্ডসেট এবং অন্যান্য ডিভাইসের জন্য সুবিধাজনক কিস্তি প্রকল্প আছে


                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8015" value="8015" >
                     <label class="form-check-label" for="gernder_radio3">
                         Special conditions for buying handsets and other devices
                         হ্যান্ডসেট এবং অন্যান্য ডিভাইস কেনার জন্য কিছু শর্ত আছে/শর্ত দেয়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8016" value="8016" >
                     <label class="form-check-label" for="gernder_radio3">
                         Simple process to change plan প্যাকেজ চেঞ্জ করার প্রক্রিয়াটা সহজ

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8017" value="8017" >
                     <label class="form-check-label" for="gernder_radio3">
                         Zero balance opportunities শূন্য ব্যালেন্স থাকলে কিছু সুবিধা পাওয়া যায়

                     </label>
                 </div>
                 <div class="form-check col-md-2" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8018" value="8018" >
                     <label class="form-check-label" for="gernder_radio3">
                         Enough onnet min on the plan প্যাকেজে যথেষ্ট অন-নেট(একই অপারেটরে) মিনিট আছে

                     </label>
                 </div>
             </div>

             <div class="col-md-12">


                 <div class="form-check col-md-6" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8019" value="8019" >
                     <label class="form-check-label" for="gernder_radio3">
                         Enough offnet min on the plan প্যাকেজে যথেষ্ট অফ-নেট(ভিন্ন অপারেটরে) মিনিট আছে

                     </label>
                 </div>
                 <div class="form-check col-md-6" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8020" value="8020" >
                     <label class="form-check-label" for="gernder_radio3">
                         Convenience of charging in USD ডলারে পে করার সুবিধা আছে

                     </label>
                 </div>
                 <div class="form-check col-md-6" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8021" value="8021" >
                     <label class="form-check-label" for="gernder_radio3">
                         Voice offers have enough validity
                         ভয়েস অফারের যথেষ্ট মেয়াদ আছে

                     </label>
                 </div>
                 <div class="form-check col-md-6" style="float: left;">
                     <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="8022" value="8022" >
                     <label class="form-check-label" for="gernder_radio3">
                         Data offers have enough validity
                         ডেটা/ইন্টারনেট অফারের যথেষ্ট মেয়াদ আছে


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
                <button type="submit" name="8001c_button" style="float: right" class="btn btn-primary">Next Page</button>
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
