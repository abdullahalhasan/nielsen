<?php
    require '../db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);
    $check_values = $_SESSION['bl_values'];
    $value_count = count($check_values);

    $tp_opt_list = $_SESSION['tp_opt_list'];
    $tp_op_count = count($tp_opt_list);
    $tp_count = $_SESSION['tp_2_count'];
    //echo json_encode($check_values).$operator_list_array[$tp_count+1]."<br>";
    //echo $operator_count.$tp_count;

    for ($i = 0; $i < $value_count; $i++) {
        if (($check_values[$i] == "6" && $i == 0) ||
            ($check_values[$i] == "7")) {
            $_POST['tp2b_btn'] = "value";
        }
    }

    if (isset($_POST['tp2b_btn'])) {
        $tp_count++;
        $_SESSION['tp_2_count'] = $tp_count;


        for ($j=0;$j<$value_count;$j++) {
            switch ($check_values[$j]) {
                case 1:
                    $qid = "TP2b1";
                    $aid = $_POST['1'];
                    dba_start($qid,$aid);
                    //echo $qid.$aid;

                    break;
                case 2:

                    $qid = "TP2b2";
                    $aid = $_POST['2'];
                    dba_start($qid,$aid);
                    //echo $qid.$aid;
                    break;
                case 3:
                    $qid = "TP2b3";
                    $aid = $_POST['3'];
                    dba_start($qid,$aid);
                    //echo $qid.$aid;

                    break;
                case 4:

                    $qid = "TP2b4";
                    $aid = $_POST['4'];
                    dba_start($qid,$aid);
                    //echo $qid.$aid;
                    break;
                case 5:

                    $qid = "TP2b5";
                    $aid = $_POST['5'];
                    dba_start($qid,$aid);
                    //echo $qid.$aid;
                    break;

            }
        }

        if ($tp_count != $operator_count) {
            if($operator_list_array[$tp_count] == "GP"){
                echo "<script type='text/javascript'> location.href='tp_2a.php'</script>";
            } else if($operator_list_array[$tp_count] == "BL"){
                echo "<script type='text/javascript'> location.href='tp_2b.php'</script>";
            } else if($operator_list_array[$tp_count] == "Airtel"){
                echo "<script type='text/javascript'> location.href='tp_2d.php'</script>";
            } else if($operator_list_array[$tp_count] == "Robi"){
                echo "<script type='text/javascript'> location.href='tp_2c.php'</script>";
            } else if($operator_list_array[$tp_count] == "TT"){
                echo "<script type='text/javascript'> location.href='tp_2e.php'</script>";
            }

        } else {
            $tp_count = 0;
            $_SESSION['tp3_count'] =$tp_count;
            echo $operator_list_array[$tp_count];

            if ($tp_count != $operator_count) {
                if($operator_list_array[$tp_count] == "GP"){
                    echo "<script type='text/javascript'> location.href='tp_3a.php'</script>";
                } else if($operator_list_array[$tp_count] == "BL"){
                    echo "<script type='text/javascript'> location.href='tp_3b.php'</script>";
                } else if($operator_list_array[$tp_count] == "Airtel"){
                    echo "<script type='text/javascript'> location.href='tp_3d.php'</script>";
                } else if($operator_list_array[$tp_count] == "Robi"){
                    echo "<script type='text/javascript'> location.href='tp_3c.php'</script>";
                } else if($operator_list_array[$tp_count] == "TT"){
                    echo "<script type='text/javascript'> location.href='tp_3e.php'</script>";
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

    <h1>CUSTOMER TOUCH-POINT [ASK ALL] </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>TP2b:<h5/>
            <p>
                Why did you… [If Bl is selected in q101a & tp1]
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

            <form action="tp_2b.php" method="post">
                <form action="tp_2a.php" method="post">
                    <?php
                    for ($i = 0; $i<$value_count;$i++) {
                        $value_tp1 = $check_values[$i];

                        switch ($value_tp1) {
                            case 1:
                                echo '<fieldset class="form-group" >
                                    <div class="row" style = "margin-top: 40px;" >
                                        <legend class="col-form-label col-md-8 pt-0" > Why did you Called at their Call Center in last 1 month ? / গত ১ মাসের মধ্যে কল সেন্টারে ফোন দিয়েছেন?</legend >
                                        <div class="col-md-4" >

                                                    <div class="form-check col-md-2" style = "float: left;" >
                                                            <input class="form-check-input" type = "text" name = "1" id = "radio_GP" required >
                                                            <label class="form-check-label" for="GP_radio1" >

                                                            </label >
                                                    </div >
                                        </div >
                                    </div >
                                </fieldset >';

                                break;
                            case 2:
                                echo '<fieldset class="form-group" >
                                    <div class="row" style = "margin-top: 40px;" >
                                        <legend class="col-form-label col-md-8 pt-0" > Visited their Website in last 1 month ? / গত ১ মাসের মধ্যে অপারেটরের ওয়েবসাইটে গিয়েছেন?</legend >
                                        <div class="col-md-4" >

                                            <div class="form-check col-md-2" style = "float: left;" >
                                                <input class="form-check-input" type = "text" name = "2" id = "radio_GP"  required >
                                                <label class="form-check-label" for="GP_radio1" >

                                                </label >
                                            </div >
                                        </div >
                                    </div >
                                </fieldset >';
                                break;
                            case 3:

                                echo '<fieldset class="form-group" >
                                    <div class="row" style = "margin-top: 40px;" >
                                        <legend class="col-form-label col-md-8 pt-0" > Used their Mobile App in last 1 month ? / গত ১ মাসের মধ্যে অপারেটরের মোবাইল  অ্যাপ ব্যবহার করেছেন? </legend >
                                        <div class="col-md-4" >

                                            <div class="form-check col-md-2" style = "float: left;" >
                                                <input class="form-check-input" type = "text" name = "3" id = "radio_GP" required >
                                                <label class="form-check-label" for="GP_radio1" >

                                                </label >
                                            </div >
                                        </div >
                                    </div >
                                </fieldset >';
                                break;
                            case 4:

                                echo '<fieldset class="form-group" >
                                    <div class="row" style = "margin-top: 40px;" >
                                        <legend class="col-form-label col-md-8 pt-0" > Visited their Customer Service Centre in last 1 month? / গত ১ মাসের মধ্যে অপারেটরের গ্রাহক সেবা কেন্দ্রে গিয়েছেন?
                                    ?:</legend >
                                        <div class="col-md-4" >

                                            <div class="form-check col-md-2" style = "float: left;" >
                                                <input class="form-check-input" type = "text" name = "4" id = "radio_GP" required >
                                                <label class="form-check-label" for="GP_radio1" >

                                                </label >
                                            </div >
                                        </div >
                                    </div >
                                </fieldset >';
                                break;
                            case 5:

                                echo '<fieldset class="form-group" >
                                    <div class="row" style = "margin-top: 40px;" >
                                        <legend class="col-form-label col-md-8 pt-0" > Received Company SMS in last 1 month ? / গত ১ মাসের মধ্যে অপারেটরের কোম্পানি থেকে কি বিষয়ক এসএমএস পেয়েছেন?</legend >
                                        <div class="col-md-4" >

                                            <div class="form-check col-md-2" style = "float: left;" >
                                                <input class="form-check-input" type = "text" name = "5" id = "radio_GP"  required >
                                                <label class="form-check-label" for="GP_radio1" >

                                                </label >
                                            </div >
                                        </div >
                                    </div >
                                </fieldset >';
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
        <button type="submit" name="tp2b_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
