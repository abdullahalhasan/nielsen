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
$qid="Q10001a";
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

            <h1>10001a APP</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <h5>Q10001a :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Apps? [MA]</h6> 
                    <br>আপনিতো বললেন যে,  অ্যাপ্সের কারনে আপনি এই অপারেটর  সম্বন্ধে অন্যকে পরামর্শ দিবেন? দয়া করে বলুন,   অ্যাপ্স বিষয়ক সুনির্দিষ্ট কোন কোন কারনে আপনি অন্যকে পরামর্শ দিবেন?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;height: auto">
                <div class="container">
                    <form action="10001a.php" method="post">
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 40px; margin-left: 5px;">
                                <div class="col-md-12;">
                                    <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10001" value="10001" >
                                        <label class="form-check-label" for="gernder_radio1">
                                            General comment on Mobile App মোবাইল এপ সম্পর্কে সাধারণ তথ্য
                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10002" value="10002">
                                        <label class="form-check-label" for="gernder_radio2">
                                            Availability of necessary options in mobile app
                                            মোবাইল এপে প্রয়োজনীয় অপশনের উপস্থিতি/আছে

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10003" value="10003" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to obtain a detailed expense report via the mobile app
                                            মোবাইল অ্যাপ দিয়ে সহজেই বিস্তারিত খরচের হিসাব পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10004" value="10004" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to use the mobile app মোবাইল এপটা ব্যাবহার করা সহজ

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10005" value="10005" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Mobile App loads fast মোবাইল এপ তাড়াতাড়ি লোড হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10006" value="10006" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Recharge is available মোবাইল সহজে টাকা ভরা/ রিচারজ করা যায়

                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-12">


                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10007" value="10007" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Easy to register/access/login to the mobile app মোবাইল এপে সহজেই রেজিস্টার/ লগইন করতে বা ঢুকতে পারি

                                        </label>
                                    </div>
                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10008" value="10008" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Design of the mobile app is appealing মোবাইল অ্যাপের ডিজাইন আকর্ষণীয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-4" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="10009" value="10009" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Mobile app has no/many bugs and errors মোবাইল অ্যাপে ভুল/ত্রুটি/সমস্যা  আছে/নাই

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
                    <button type="submit" name="asd"  class="btn btn-primary">Next Page</button>
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