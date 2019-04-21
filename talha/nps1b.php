<?php
    require '../db_qa.php';

    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);
    $r2_operator = $_SESSION['operator_name'];
    //echo json_encode($operator_list_array);
    for ($i=0; $i<$operator_count; $i++) {
        $ex_op = $operator_list_array[$i];
        if ($ex_op != $r2_operator) {
            $new_operator_list[] = $ex_op;
        }
    }
    if (isset($_POST['nps1b_btn'])) {
        for ($i=0;$i<$operator_count-1;$i++) {
            $qid = 'NPS1b'.$new_operator_list[$i];
            $aid = $_POST['Brand_number_radio'.$i];
            dba_start($qid,$aid);
            /*echo $qid.$aid;
            echo "<br>";*/
        }
        //die;
        echo "<script type='text/javascript'>location.href='nps2b.php'</script>";
    }

    //echo json_encode($new_operator_list);

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
    
        <h1>NPS FOR OTHER CONNECTIONS</h1>
    
        </div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>NPS1b:</h5>
            <p>
            <h6>How likely are you to recommend your following mobile phone service provider [Mention the brand names one by name as mentioned in Q101a; except the one respondent has already given answer in NPS1a] to a friend or relative? Please answer using a scale of 0 to 10, where 0 is would not recommend at all and 10 is will definitely recommend. [SA]
            <br><br>
                কেউ যদি মোবাইল সিম ব্যবহারের বিষয়ে আপনার মতামত জানতে চায়, সেক্ষেত্রে তাকে ___ কোম্পানির সিম ব্যবহারের পরামর্শ দেওয়ার সম্ভাবনা কতটুকু? [NPS1a প্রশ্নে যে ব্র্যান্ড উত্তরদাতা উল্লেখ করেছেন, ঐ ব্র্যান্ডটি বাদে Q101a প্রশ্নে উল্লিখিত অন্য সকল ব্র্যান্ডের নাম দেখান,] [একটি উত্তর]
                পরামর্শ দেওয়ার উপর ভিত্তি করে আপনি ___[NPS1a প্রশ্নে যে ব্র্যান্ড উত্তরদাতা উল্লেখ করেছেন, ঐ ব্র্যান্ডটি বাদে Q101a প্রশ্নে  উল্লিখিত অন্য সকল ব্র্যান্ডের নাম দেখান,] _____সিমকে ০ থেকে ১০ এর মধ্যে কত নম্বর দিবেন? যদি পরামর্শ দেওয়ার সম্ভাবনা বেশি থাকে তাহলে বেশির দিকে নম্বর দিবেন, আর যদি কম থাকে তাহলে কমের দিকে নম্বর দিবেন।
            <br>এখানে,
                ০ মানে একদম ই পরামর্শ দিবেন না
                ১০ মানে অবশ্যই পরামর্শ দিবেন
            <br><br>(মনে রাখবেন এখানে ভুল বা শুদ্ধ বলে কিছু নেই। আমরা শুধুমাত্র আপনার মতামতটি জানতে চাচ্ছি)
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
            <?php
                for ($i=0;$i<count($new_operator_list); $i++) {
                    echo '<form action="nps1b.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-1 pt-0">'.$new_operator_list[$i].':</legend>
                        <div class="col-md-11">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="00" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="01" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                   01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="Brand_number_other" value="02" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                   02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="Brand_number_other" value="03" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                   03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="04" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                   04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="05" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                   05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="06" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                  06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="07" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                   07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="08" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                  08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_Brand_number" value="09" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio'.$i.'" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>';
                }
        echo '</div>

    </div>
</div>

<br>

<div class="container">
    <div class="col-md-10">
        <button type="submit" name="nps1b_btn" style="float: right" class="btn btn-primary">Next Page</button>
    </div>
</div>
</form>';
                ?>

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
