<?php
require '../db_qa.php';
$operator_list_array = $_SESSION['internet_user_list'];
$all_op_array = $_SESSION['operator_list_array'];
$operator_count = count($operator_list_array);

$array_count = $_SESSION['data_count'];
//echo $operator_list_array[$array_count].$array_count.$operator_count;

if (isset($_POST['datad4d_btn'])) {
    $array_count++;
    $check_count = $array_count+1;
    $_SESSION['data_count'] = $array_count;

    $qid = 'D4d';
    $aid =arr_concate($_POST['data_d4']);
    dba_start($qid,$aid);
    //die;

    if ($array_count != $operator_count) {
        if($operator_list_array[$array_count] == "GP"){
            echo "<script type='text/javascript'> location.href='data_d4a.php'</script>";
        } else if($operator_list_array[$array_count] == "BL"){
            echo "<script type='text/javascript'> location.href='data_d4b.php'</script>";
        } else if($operator_list_array[$array_count] == "Airtel"){
            echo "<script type='text/javascript'> location.href='data_d4d.php'</script>";
        } else if($operator_list_array[$array_count] == "Robi"){
            echo "<script type='text/javascript'> location.href='data_d4c.php'</script>";
        } else if($operator_list_array[$array_count] == "TT"){
            echo "<script type='text/javascript'> location.href='data_d4e.php'</script>";
        }

    } else {
        $tp_count = 0;
        $check_count = $tp_count+1;
        $_SESSION['tp1_count'] = $tp_count;
        if ($tp_count != $operator_count) {
            if($all_op_array[$tp_count] == "GP"){
                echo "<script type='text/javascript'> location.href='tp_1a.php'</script>";
            } else if($all_op_array[$tp_count] == "BL"){
                echo "<script type='text/javascript'> location.href='tp_1b.php'</script>";
            } else if($all_op_array[$tp_count] == "Airtel"){
                echo "<script type='text/javascript'> location.href='tp_1d.php'</script>";
            } else if($all_op_array[$tp_count] == "Robi"){
                echo "<script type='text/javascript'> location.href='tp_1c.php'</script>";
            } else if($all_op_array[$tp_count] == "TT"){
                echo "<script type='text/javascript'> location.href='tp_1e.php'</script>";
            }

        }
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

                <h1 >Data Usage Section </h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <h5>D4 d:</h5>
                <p>
                <h6>[ASK THIS QUESTION ONLY IF Airtel IS SELECTED IN Q101d] [ যদি Q101d প্রশ্নে উত্তরদাতা Airtel নির্বাচন করে থাকেন, শুধুমাত্র তাহলে জিজ্ঞাসা করুন]
                    <br>Can you please tell me why did you rate Airtel based on its Data Service? [MA]
                    [PROBE]
                    <br><br>দয়া করে বলুন Airtel এর ইন্টারনেট সেবার ব্যাপারে আপনার এরকম রেটিং দেওয়ার কারনগুলো কি কি? আর কিছু?  [একাধিক উত্তর হবে]
                </h6>
                </p>
            </div>
            <br>
            <br>
        </div>

       
       <div class="container" >
            <form action="data_d4d.php" method="post">
                <div class="form-group row" style="border:1px solid; margin-top: 6px;">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Overall mobile internet / মোবাইল ইন্টারনেট
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="101">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Internet speed / ইন্টারনেটের গতি
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="102">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Internet does not drop (continuity) / ইন্টারনেট বার বার বন্ধ হয়ে যায় না (অনবরত)
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="103">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">3G coverage / 3G কভারেজ/ প্রাপ্যতা
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="104">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">4G coverage / 4G কভারেজ/ প্রাপ্যতা
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="105">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Price of data package(low) / ডেটা প্যাকেজের দাম (কম)
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="106">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Data package that meets our/me need / ডেটা প্যাকেজ যা আমার চাহিদা পূরণ করে
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="107">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">3G network Quality / 3G নেটওয়ার্কের মান ভালো
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="108">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">4G network Quality / 4G নেটওয়ার্কের মান ভালো
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="109">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">No Breaks or stops loading web pages / applications / files  / ওয়েব পেজ/ অ্যাপ/ ফাইল চালু করলে বন্ধ বা কেটে যায় না
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="110">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Opportunity to use Mobile Internet everywhere / যেকোনো জায়গায় মোবাইল এ ইন্টারনেট পাওয়া যায়
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="111">

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row" style="margin-top: 6px;">
                                <legend class="col-form-label col-sm-6 pt-0">Opening web pages and applications on the first try / প্রথম চেষ্টাই ওয়েব পেজ/ অ্যাপ চালু করা যায়
                                </legend>
                                <div class="col-md-6">

                                    <div class="form-check col-md-3" style="float: left;" >
                                        <input class="form-check-input" type="checkbox" name="data_d4[]" id="d4_checkbox" value="112">

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
                <button type="submit" name="datad4d_btn" style="float: right" class="btn btn-primary">Next Page</button>
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