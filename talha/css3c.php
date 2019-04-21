<?php
require '../db_qa.php';
$operator_list_array = $_SESSION['operator_list_array'];
$operator_count = count($operator_list_array);

if (isset($_POST['css3c_btn'])) {
    $array_count=$_SESSION['css_count'];
    $array_count++;
    $_SESSION['css_count'] = $array_count;
    $check_count = $array_count+1;

    //db Insert
    $qid = "CSS3c";
    $net_quality_radio[] =$_POST['onq_radio'];
    $net_quality_radio[] =$_POST['net_radio'];
    $net_quality_radio[] =$_POST['price_radio'];
    $net_quality_radio[] =$_POST['offer_radio'];
    $net_quality_radio[] =$_POST['tans_radio'];
    $net_quality_radio[] =$_POST['ocs_radio'];
    $net_quality_radio[] =$_POST['promo_radio'];
    $net_quality_radio[] =$_POST['easy_radio'];
    $net_quality_radio[] =$_POST['rp_radio'];
    $net_quality_radio[] =$_POST['ac_radio'];
    dba_start($qid,arr_concate($net_quality_radio));


    if ($array_count != $operator_count) {
        if($operator_list_array[$array_count] == "GP"){
            echo "<script type='text/javascript'> location.href='css3a.php'</script>";
        } else if($operator_list_array[$array_count] == "BL"){
            echo "<script type='text/javascript'> location.href='css3b.php'</script>";
        } else if($operator_list_array[$array_count] == "Airtel"){
            echo "<script type='text/javascript'> location.href='css3d.php'</script>";
        } else if($operator_list_array[$array_count] == "Robi"){
            echo "<script type='text/javascript'> location.href='css3c.php'</script>";
        } else if($operator_list_array[$array_count] == "TT"){
            echo "<script type='text/javascript'> location.href='css3e.php'</script>";
        }

    } else {
        echo "<script type='text/javascript'> location.href='hs1.php'</script>";
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

    <h1>CUSTOMER SATISFACTION SCORE </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>CSS3c:<h5/>
            <p>
            <h6>[ASK IF Robi IS SELECTED IN Q101A]
                Thinking of Robi, on a scale of 0 to 10, how satisfied you are on your operator for each of these factors? Where 0 being Extremely Dissatisfied and 10 being Extremely Satisfied.
                [Probe each of the factors to capture level of satisfaction]
                [Rotate]
                <br><br>[যদি Q101A প্রশ্নে উত্তরদাতা Robi কোড করে থাকেন, শুধুমাত্র তাহলে জিজ্ঞাসা করুন]
                দয়া করে বলুন, নিচে উল্লিখিত প্রতিটি বিষয়ের ক্ষেত্রে আপনার অপারেটরের সার্ভিস নিয়ে আপনি কতখানি সন্তুষ্ট বা অসন্তুষ্ট?


            </h6>
            <br>
            </p>
    </div>

</div>
<br>
<br>
</div>

<div class="container">
    <div class="col-md-10" style="border:1px solid;height: auto;">


        <div class="container">
            <form action="css3c.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Overall network quality / সার্বিকভাবে নেটওয়ার্কের গুনগত মান </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="onq_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Network coverage / নেটওয়ার্ক কাভারেজ  </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="net_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0"> Price / সেবার দাম ও কল রেট </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="price_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Offer & packages according to your needs / নিজের প্রয়োজনমাফিক অফার ও প্যাকেজ সুবিধা </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="offer_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Transparency / সেবার ধরন ও মানের ব্যাপারে স্বচ্ছতা   </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="tans_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Overall customer service / গ্রাহক সেবার অভিজ্ঞতা   </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ocs_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Promotions that appeal/relevant for you / বিভিন্ন প্রচারণামূলক কাজকর্ম যা আমার জন্য প্রযোজ্য/আমার ভাল লাগে </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="promo_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Easiness to contact the providers for any reason / যে কোন দরকারে  সহজে অপারেটরের সাথে যোগাযোগ করতে পারা   </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="easy_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Recharge process / টাকা রিচার্জ বা লোড করার পদ্ধতি   </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="rp_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-4 pt-0">Advertising and communication / বিজ্ঞাপন এবং প্রচার-প্রচারনা  </legend>
                        <div class="col-md-8">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="0" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="Brand_number_other" value="2" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                    02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="Brand_number_other" value="3" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="4" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="5" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="6" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="7" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="8" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_Brand_number" value="9" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="ac_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                    10
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
    <div class="col-md-12">
        <button type="submit" name="css3c_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
