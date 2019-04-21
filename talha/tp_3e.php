<?php
require '../db_qa.php';
$operator_list_array = $_SESSION['operator_list_array'];
$operator_count = count($operator_list_array);
$check_values = $_SESSION['tt_values'];
$value_count = count($check_values);


for ($i = 0; $i < $value_count; $i++) {
    if (($check_values[$i] == "6" && $i == 0) ||
        ($check_values[$i] == "7")) {
        $_POST['tp2b_btn'] = "value";
    }
}


if (isset($_POST['tp3e_btn'])) {
    $array_count = $_SESSION['tp3_count'];
    $array_count++;
    $_SESSION['tp3_count'] = $array_count;
    $check_count = $array_count+1;

    for ($j=0;$j<$value_count;$j++) {
        switch ($check_values[$j]) {
            case 1:
                $qid = "TP3e1";
                $aid = $_POST['call_radio'];
                dba_start($qid,$aid);
                //echo $qid.$aid;

                break;
            case 2:

                $qid = "TP3e2";
                $aid = $_POST['web_radio'];
                dba_start($qid,$aid);
                //echo $qid.$aid;
                break;
            case 3:
                $qid = "TP3e3";
                $aid = $_POST['app_radio'];
                dba_start($qid,$aid);
                //echo $qid.$aid;

                break;
            case 4:

                $qid = "TP3e4";
                $aid = $_POST['sc_radio'];
                dba_start($qid,$aid);
                //echo $qid.$aid;
                break;
            case 5:

                $qid = "TP3e5";
                $aid = $_POST['sms_radio'];
                dba_start($qid,$aid);
                //echo $qid.$aid;
                break;

        }
    }
    if ($array_count != $operator_count) {
        if($operator_list_array[$array_count] == "GP"){
            echo "<script type='text/javascript'> location.href='tp_3a.php'</script>";
        } else if($operator_list_array[$array_count] == "BL"){
            echo "<script type='text/javascript'> location.href='tp_3b.php'</script>";
        } else if($operator_list_array[$array_count] == "Airtel"){
            echo "<script type='text/javascript'> location.href='tp_3d.php'</script>";
        } else if($operator_list_array[$array_count] == "Robi"){
            echo "<script type='text/javascript'> location.href='tp_3c.php'</script>";
        } else if($operator_list_array[$array_count] == "TT"){
            echo "<script type='text/javascript'> location.href='tp_3e.php'</script>";
        }

    } else {
        echo "<script type='text/javascript'> location.href='css1.php'</script>";
    }

}


?><!DOCTYPE html>
<head>
    <title>Neilsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>

<form>
<sectionclass="container">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Neilsen Questionnaire</a>
    <form class="form-inline">
        <button class="btn btn-outline-success" type="button">View Answers</button>
    </form>
</nav>
</section>

<br><br>

<div class="container">

    <h1>CUSTOMER TOUCH-POINT [ASK ALL] </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>TP3e:<h5/>
            <p>
            <h6>[ASK IF TT CODED IN TP1] / যদি TP1 প্রশ্নে উত্তরদাতা TT কোড করে থাকেন, শুধুমাত্র তাহলে জিজ্ঞাসা করুন]
                <br>You said you [SAY: OPTIONS MENTIONED IN TP1] for TT. How satisfied were you after getting the service? Please answer using a scale of 0 to 10, where 0 is Highly Dissatisfied and 10 is Extremely Satisfied. [SA]
                <br><br> আপনি বলেছেন, আপনি ____[TP1 প্রশ্নে উত্তরদাতার নির্বাচিত অপশনটি পড়ে শোনান]___। দয়া করে বলুন,  এই অপারেটরের এই সার্ভিসটির ব্যবহার করে আপনি কতখানি সন্তুষ্ট বা অসন্তুষ্ট?
                আপনার উত্তরটি 0 থেকে ১০ সংখ্যার মধ্যে দিন যেখানে 0= খুবই অসন্তুষ্ট এবং ১০=অত্যন্ত সন্তুষ্ট  [একটি উত্তর]

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
            <form action="tp_3e.php" method="post">
                <?php
                for ($i=0; $i<$value_count;$i++) {
                    switch ($check_values[$i]) {
                        case 1:
                            echo '<fieldset class="form-group">
                                        <div class="row" style="margin-top: 40px;">
                                            <legend class="col-form-label col-sm-2 pt-0">CALL CENTER / কল সেন্টার</legend>
                                            <div class="col-md-10">
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="00" required>
                                                    <label class="form-check-label" for="Brand_number_radio1">
                                                        00
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;" >
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="01" required>
                                                    <label class="form-check-label" for="Brand_number_radio2">
                                                        01
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="Brand_number_other" value="02" required>
                                                    <label class="form-check-label" for="Brand_number_radio3">
                                                        02
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="Brand_number_other" value="03" required>
                                                    <label class="form-check-label" for="Brand_number_adio4">
                                                        03
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="04" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                                        04
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="05" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                                        05
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="06" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                                        06
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="07" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                                        07
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="08" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                                        08
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_Brand_number" value="09" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        09
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="call_radio" id="radio_other" value="10" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        10
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>';
                            break;
                        case 2:
                            echo '<fieldset class="form-group">
                                        <div class="row" style="margin-top: 40px;">
                                            <legend class="col-form-label col-sm-2 pt-0">WEBSITE / ওয়েবসাইট </legend>
                                            <div class="col-md-10">
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="00" required>
                                                    <label class="form-check-label" for="Brand_number_radio1">
                                                        00
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;" >
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="01" required>
                                                    <label class="form-check-label" for="Brand_number_radio2">
                                                        01
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="Brand_number_other" value="02" required>
                                                    <label class="form-check-label" for="Brand_number_radio3">
                                                        02
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="Brand_number_other" value="03" required>
                                                    <label class="form-check-label" for="Brand_number_adio4">
                                                        03
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="04" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                                        04
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="05" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                                        05
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="06" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                                        06
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="07" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                                        07
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="08" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                                        08
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_Brand_number" value="09" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        09
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="web_radio" id="radio_other" value="10" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        10
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>';
                            break;
                        case 3:

                            echo '<fieldset class="form-group">
                                        <div class="row" style="margin-top: 40px;">
                                            <legend class="col-form-label col-sm-2 pt-0">MOBILE APP / মোবাইল অ্যাপ  </legend>
                                            <div class="col-md-10">
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="00" required>
                                                    <label class="form-check-label" for="Brand_number_radio1">
                                                        00
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;" >
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="01"required>
                                                    <label class="form-check-label" for="Brand_number_radio2">
                                                        01
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="Brand_number_other" value="02" required>
                                                    <label class="form-check-label" for="Brand_number_radio3">
                                                        02
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="Brand_number_other" value="03" required>
                                                    <label class="form-check-label" for="Brand_number_adio4">
                                                        03
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="04" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                                        04
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="05" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                                        05
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="06" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                                        06
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="07" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                                        07
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="08" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                                        08
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_Brand_number" value="09" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        09
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="app_radio" id="radio_other" value="10" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        10
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>';
                            break;
                        case 4:
                            echo '<fieldset class="form-group">
                                        <div class="row" style="margin-top: 40px;">
                                            <legend class="col-form-label col-sm-2 pt-0">Service centre / গ্রাহক সেবা কেন্দ্র </legend>
                                            <div class="col-md-10">
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="00" required>
                                                    <label class="form-check-label" for="Brand_number_radio1">
                                                        00
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;" >
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="01" required>
                                                    <label class="form-check-label" for="Brand_number_radio2">
                                                        01
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="Brand_number_other" value="02" required>
                                                    <label class="form-check-label" for="Brand_number_radio3">
                                                        02
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="Brand_number_other" value="03" required>
                                                    <label class="form-check-label" for="Brand_number_adio4">
                                                        03
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="04" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                                        04
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="05" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                                        05
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="06" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                                        06
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="07" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                                        07
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="08" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                                        08
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_Brand_number" value="09" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        09
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sc_radio" id="radio_other" value="10" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        10
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>';
                            break;
                        case 5:
                            echo '<fieldset class="form-group">
                                        <div class="row" style="margin-top: 40px;">
                                            <legend class="col-form-label col-sm-2 pt-0">COMPANY SMS/ কোম্পানি এসএমএস </legend>
                                            <div class="col-md-10">
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="00" required>
                                                    <label class="form-check-label" for="Brand_number_radio1">
                                                        00
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;" >
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="01" required>
                                                    <label class="form-check-label" for="Brand_number_radio2">
                                                        01
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="Brand_number_other" value="02" required>
                                                    <label class="form-check-label" for="Brand_number_radio3">
                                                        02
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="Brand_number_other" value="03" required>
                                                    <label class="form-check-label" for="Brand_number_adio4">
                                                        03
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="04" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                                        04
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="05" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                                        05
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="06" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                                        06
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="07" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                                        07
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="08" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                                        08
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_Brand_number" value="09" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        09
                                                    </label>
                                                </div>
                                                <div class="form-check col-md-1" style="float: left;">
                                                    <input class="form-check-input" type="radio" name="sms_radio" id="radio_other" value="10" required>
                                                    <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                                        10
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>';
                            break;
                        default:
                            break;
                    }
                }
                ?>

        </div>

    </div>
</div>

<br>

<div class="container">
    <div class="col-md-10">
        <button type="submit" name="tp3e_btn" style="float: right" class="btn btn-primary">Next Page</button>
    </div>
</div>
</form>
<br><br><br>

<section>
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#"> nielsen.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</section>

</html>