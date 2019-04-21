<?php
require '../db_qa.php';

   // echo"working in if";
$session_value = $_SESSION['nps2c'];

$array_count=count($session_value);
$counter=$_SESSION['nps2c_count'];
$route_no=$session_value[$counter];
if(isset($_POST['13001c_button'])){
     //for db insertion 
$checkbox_value=$_POST['gernder_radio'];
$aid=arr_concate($checkbox_value);
$qid="Q13001c";
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

            <h1>13001c COMMUNICATION AND PROMOTION</h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-10" style="border:1px solid;">
                <h5>Q13001c :<h5/>
                    <p>
                    <h6>Can you please tell me why did you rate this operator based on their Communication
                        and Promotion? [MA]</h6>
                    <br>
                    আপনিতো বললেন যে, এই ব্র্যান্ডটির প্রচার প্রচারণার কারনে আপনি এই অপারেটর
                    সম্বন্ধে অন্যকে পরামর্শ দিবেন না? দয়া করে বলুন, প্রচার প্রচারণার সুনির্দিষ্ট কোন কোন
                    কারনে আপনি অন্যকে পরামর্শ দিবেন না?আর কিছু? আর কিছু?
                    </p>
            </div>

        </div>
        <br>
        <br>
        </div>

       
        <div class="container">
            <div class="col-md-10" style="border:1px solid;height: auto">
                <div class="container">
<form action="13001c.php" method="post">
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 40px; margin-left: 5px;">
                                <div class="col-md-12;">
                                    <div class="form-check col-md-2" style="float: left; padding-left: 5px;: ">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_male" value="13001" >
                                        <label class="form-check-label" for="gernder_radio1">
                                            General comment on Communication and promotion যোগাযোগ এবং প্রচার সম্পর্কে সাধারণ মন্তব্য

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_female" value="13002">
                                        <label class="form-check-label" for="gernder_radio2">
                                            Availability of information prior to the application process (brochures / internet etc) "আবেদন প্রক্রিয়ার আগে অপারেটর/প্যাকেজ সম্পর্কে তথ্য জানতে পারি
                                            (ব্রুশিয়ার, ইন্টারনেট)"

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13003" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Number of documents required to subscribe to a service এই সেবাটি পাওয়ার জন্য যত কাগজপত্রের প্রয়োজন

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13004" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Clearly communicating terms and conditions স্পষ্ট করে শর্তাবলী বলা আছে

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13005" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Availability of different ways/methods for applying for new services নতুন সেবার  পাওয়ার জন্য  বিভিন্ন রকম আবেদনের উপায় আছে


                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13006" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Have frequent promotions ঘন ঘন প্রচারনা হয়

                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-12">


                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13007" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Regular information regarding new promotions, products and services নতুন প্রচার, পণ্য এবং সেবা সম্পর্কিত নিয়মিত তথ্য দেয়া হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13008" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Clarity of advertisement messages বিজ্ঞাপন এর মূল বক্তব্য/কথা স্পষ্ট  বোঝা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13009" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Likeability of advertising বিজ্ঞাপনগুলো পছন্দ হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13010" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Sponsorship of relevant events বিভিন্ন প্রোগ্রাম/ইভেন্টের উদ্যোগ নেয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13011" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Offers attractive promotions and discounts আকর্ষণীয়ভাবে প্রচারণা এবং ডিসকাউন্ট অফার করা হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13012" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Clearly communicated prices/service charges of all the mobile services স্পষ্টভাবে সব মোবাইল সেবার দাম /  চার্জ জানানো  হয়

                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-12">


                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13013" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Fair and honest in all advertising communications সকল প্রকারের বিজ্ঞাপন প্রচারণায় সততা পাওয়া যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13014" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Amount of SMS send by the company to me যতগুলো এসএমএসের আমাকে কোম্পানী পাঠিয়েছে

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13015" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Presence of advertising on different media outlets বিভিন্ন মিডিয়ায়/ মাধ্যমে এর বিজ্ঞাপন দেখা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13016" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Ability to refuse SMS mailing কোম্পানি থেকে পাঠানো এসএমএস ব্লক করা যায়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13017" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            The operator's ability to clearly demonstrate its advantages over its competitors
                                            অন্য অপারেটর থেকে এই অপারেটরের সেবা ভাল - এটি স্পষ্টভাবে বোঝাতে পারে

                                        </label>
                                    </div>
                                    <div class="form-check col-md-2" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13018" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Event notifications (end of min, SMS, Data) are always on time ইভেন্ট বিজ্ঞপ্তিগুলি (মিনিট, এসএমএস, ডেটা শেষ) সময় মত দেয়া হয়

                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">


                                    <div class="form-check col-md-6" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13019" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            Receiving congratulation with b-day বার্থডের দিন উইশ করা হয়

                                        </label>
                                    </div>
                                    <div class="form-check col-md-6" style="float: left;">
                                        <input class="form-check-input" type="checkbox" name="gernder_radio[]" id="radio_other" value="13020" >
                                        <label class="form-check-label" for="gernder_radio3">
                                            receiving personalized communication from provider শুধুমাত্র আমার জন্য প্রযোজ্য অফারগুলো আলাদা করে জানানো হয়

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
                <button type="submit" name="13001c_button" style="float: right" class="btn btn-primary">Next Page</button>
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
