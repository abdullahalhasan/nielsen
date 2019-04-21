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
    $qid="Q18001a";
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

            <h1>18001a SPAM SMS </h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <h5>Q18001a :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on Spam SMS? [MA] </h6> 
                    <br>আপনিতো বললেন যে,  অপ্রয়োজনীয় এসএমএস এর কারনে আপনি এই অপারেটর  সম্বন্ধে অন্যকে পরামর্শ দিবেন? দয়া করে বলুন,   অপ্রয়োজনীয় এসএমএস এর সুনির্দিষ্ট কোন কোন কারনে আপনি অন্যকে পরামর্শ দিবেন?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;height: auto">
                <div class="container">
                    <form action="18001a.php" method="post" >
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