<?php
    require  '../db_qa.php';
    $operator_list_array = ["GP","BL","Robi","Airtel","TT"];
    $operator_count = count($operator_list_array);

    if (isset($_POST['bo1_btn'])) {
        //db Insert
        $qid = "BO1";
        $aid =$_POST['best_radio'];
        dba_start($qid,$aid);

        echo "<script type='text/javascript'> location.href='q103.php'</script>";
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

    <h1>ASK BO1 TO ALL </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>BO1:<h5/>
            <p>
            <h6>Thinking of all the operators there in the market; which is the best operator according to you. [SA]
                <br><br> [বর্তমানে বাজারে যত মোবাইল ফোন অপারেটরের সেবা পাওয়া যাচ্ছে, তাদের মধ্যে কোনটি আপনার মতে সেরা?  [ একটি উত্তর]</h6>
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
            for ($i = 0; $i < $operator_count; $i++) {
                $j=$i+1;
                echo '<form action="bo1.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                       
                        <div class="col-md-10">
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="best_radio" id="radio_rameenphone" value="'.$j.'" required>
                                <label class="form-check-label" for="rgameenphone_radio1">
                                    ' . $operator_list_array[$i] . '
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
        <button type="submit" name="bo1_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
