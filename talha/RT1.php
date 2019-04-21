<?php
        require '../db_qa.php';
        $operator_list_array = $_SESSION['operator_list_array'];
        $internet_user_list = $_SESSION['internet_user_list'];
        $count_user = count($internet_user_list);
        $operator_count = count($operator_list_array);
        $r2_operator = $_SESSION['operator_name'];
        $total_operator = $_SESSION['op_flag'];
        if(isset($_POST['rt1_button'])) {
            for ($i=0;$i<$operator_count;$i++) {
                $qid = 'RT1'.$operator_list_array[$i];
                $aid = $_POST['Brand_number_radio'.$i];
                dba_start($qid,$aid);
                /*echo $qid.$aid;
                echo "<br>";*/
            }
            if ($total_operator != 1) {
            echo "<script type='text/javascript'> location.href='nps1b.php'</script>";
            } else {

                if ($count_user > 0) {
                    echo "<script type='text/javascript'> location.href='data_d1.php'</script>";
                } else {

                    $tp_count = 0;
                    $check_count = $tp_count + 1;
                    $_SESSION['tp1_count'] = $tp_count;

                    if ($operator_list_array[$tp_count] == "GP") {
                        echo "<script type='text/javascript'> location.href='tp_1a.php'</script>";
                    } else if ($operator_list_array[$tp_count] == "BL") {
                        echo "<script type='text/javascript'> location.href='tp_1b.php'</script>";
                    } else if ($operator_list_array[$tp_count] == "Airtel") {
                        echo "<script type='text/javascript'> location.href='tp_1d.php'</script>";
                    } else if ($operator_list_array[$tp_count] == "Robi") {
                        echo "<script type='text/javascript'> location.href='tp_1c.php'</script>";
                    } else if ($operator_list_array[$tp_count] == "TT") {
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

    <h1>RETENTION</h1>

</div>

<br><br>

    <div class="container">
        <div class="col-md-10" style="border:1px solid;">
            <h5>RT1 :<h5/>
                <h6>How likely you are to retain your Connection(s)
                    <br> Q101a প্রশ্নে আপনার উল্লেখ করা ব্র্যান্ডগুলোর ব্যবহার চালিয়ে যাওয়ার ক্ষেত্রে আপনার মতামত বলুন।
                    <br><br>[BRAND NAME TO APPEAR FROM Q101a  / Q101a প্রশ্নে উল্লিখিত ব্র্যান্ডের নামগুলো দেখান।]

                </h6>
                <br><br>
        </div>
    </div>
    <br>
    <br>


<div class="container">
    <div class="col-md-10" style="border:1px solid;height: auto;">


        <div class="container">
            <?php
            for($i = 0; $i<$operator_count; $i++) {
                echo '<form action="RT1.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-2 pt-0">' . $operator_list_array[$i] . ' : </legend>
                        <div class="col-md-10">
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_number" value="1" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    Very Unlikely সম্ভাবনা নেই বললেই চলে 
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;" >
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_female" value="2" required>
                                <label class="form-check-label" for="gernder_radio2">
                                    Somewhat
                                    Unlikely সম্ভাবনা কম 
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_other" value="3" required>
                                <label class="form-check-label" for="gernder_radio3">
                                    Not Sure নিশ্চিত নই
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_other" value="4" required>
                                <label class="form-check-label" for="gernder_radio3">
                                    Somewhat likely কিছুটা সম্ভাবনা আছে 
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_other" value="5" required>
                                <label class="form-check-label" for="gernder_radio3">
                                    Very Likely অনেক বেশি সম্ভাবনা আছে  
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
        <button type="submit" name="rt1_button" style="float: right" class="btn btn-primary">Next Page</button>
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




































