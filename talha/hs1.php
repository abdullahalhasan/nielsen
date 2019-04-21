<?php
    require '../db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);

    if (isset($_POST['hs1_btn'])) {

        //db Insert
        $qid = "HS1";
        $aid =$_POST['grameenphone_radio'];
        dba_start($qid,$aid);


        echo "<script type='text/javascript'> location.href='bo1.php'</script>";
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

    <h1>Handset Section [ASK ALL] </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-12" style="border:1px solid;">
        <h5>HS1:<h5/>
            <p>
            <h6>Talking about the handset through which we are currently conversing; what type of handset is this?
                [Probe the options]
                <br><br>আপনি বর্তমানে কি ধরনের মোবাইল হ্যান্ডসেট ব্যবহার করছেন?
                প্রতিটি অপশনের ক্ষেত্রে প্রব করুন।

            </h6>
            <br>
            </p>
    </div>

</div>
<br>
<br>
</div>

<div class="container">
    <div class="col-md-12" style="border:1px solid;height: auto;">


        <div class="container">
            <form action="hs1.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;float: left;">
                        
                        <div class="col-md-12">
                            <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="grameenphone_radio" id="radio_rameenphone" value="1" required>
                                <label class="form-check-label" for="rgameenphone_radio1">
                                    Basic Phone. Usually it can perform only basic telephony services with no/limited multimedia facilities
                                    / বেসিক ফোন- যাতে সাধারণ টেলিফোন সার্ভিসের কাজগুলো(যেমন কল করা, মেসেজ করা) করা যায়, কোন মাল্টিমিডিয়া সুবিধা নেই
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="grameenphone_radio" id="radio_rameenphone" value="2" required>
                                <label class="form-check-label" for="rgameenphone_radio1">
                                    Feature Phone. Phones with some multimedia features and camera. Usually users cannot download apps
                                    / ফিচার ফোন – এটিতে ক্যামেরাসহ অল্প কিছু মাল্টিমিডিয়া সুবিধা থাকে, ব্যবহারকারী সাধারণত কোন অ্যাপ ডাউনলোড করতে পারেন না
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="grameenphone_radio" id="radio_rameenphone" value="3" required>
                                <label class="form-check-label" for="rgameenphone_radio1">
                                    Smartphone. These phones features smart platform like android or iOS. You can download apps of your choice
                                    /  স্মার্ট ফোন- এটিতে android বা iOS  সেট আপ থাকে, এই ফোনে বেসিক এবং ফিচার ফোনের সুবিধাসহ পছন্দসই অ্যাপ্স ডাউনলোড করা যায়
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="grameenphone_radio" id="radio_rameenphone" value="4" required>
                                <label class="form-check-label" for="rgameenphone_radio1">
                                    Don’t Know/ Can’t Say /  জানিনা/ বলতে চাইনা
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
        <button type="submit" name="hs1_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
