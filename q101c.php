<?php
    require 'db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);
    $r2_op = $_SESSION['operator_name'];
    if (isset($_POST['q101c_btn'])) {
        //db insert
        for($i=0;$i<$operator_count;$i++) {
            $qid= "Q101c".$operator_list_array[$i];
            $aid = $_POST['Connection_radio'.$i];
            //echo $qid.$aid."<br>";
            dba_start($qid,$aid);
        }
        for ($i=0; $i<$operator_count;$i++) {
            if ($r2_op == $operator_list_array[$i]) {
                $usage = $_POST['Connection_radio'.$i];
                if ($usage == "01") {
                    echo "<script type='text/javascript'> location.href='done.php'</script>";
                }
            }
        }
       echo "<script type='text/javascript'> location.href='q101d.php'</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Neilsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
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

    <h1>Q101c</h1>

</div>
<br><br>

<div class="container">
    <div class="col-md-12" style="border:1px solid;">
        <h5>Q101c :</h5>
            <h6>For how long are you using these connections?  [SINGLE ANSWER PER LINE]
                <br><br> এই সংযোগগুলো / সিমগুলো আপনি কতমাস ধরে ব্যবহার করছেন? </h6>
            <br>
    </div>
</div>
<br>
<br>


<div class="container">
    <div class="col-md-12" style="border:1px solid;height: auto;">


        <div class="container">
            <?php
            for($i = 0; $i<$operator_count; $i++) {

            echo '<form action="q101c.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-2 pt-0">'.$operator_list_array[$i].' :</legend>
                        <div class="col-md-10">
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Connection_radio'.$i.'"
                                       id="radio_Less_Then_6_Months" value="01" required>
                                <label class="form-check-label" for="Connection_radio1">
                                    Less Then 6 Months
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Connection_radio'.$i.'"
                                       id="radio_6_12_months_Unlikely" value="02" required>
                                <label class="form-check-label" for="Connection_radio2">
                                    6-12 months
                                    Unlikely
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Connection_radio'.$i.'"
                                       id="radio_12_18_Months" value="03" required> 
                                <label class="form-check-label" for="Connection_radio3">
                                    12-18 Months
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Connection_radio'.$i.'"
                                       id="radio_18_24_Months" value="04" required>
                                <label class="form-check-label" for="Connection_radio4">
                                    18-24 Months
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="radio" name="Connection_radio'.$i.'"
                                       id="radio_30_36_Months" value="05" required>
                                <label class="form-check-label" for="Connection_radio5">
                                    30-36 Months
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>';
                }
               echo "</div>

            </div>
        </div>

        <br>

        <div class='container'>
            <div class='form-group row float-right'>
                <div class='col-sm-10'>
                    <button type='submit' name='q101c_btn' class='btn btn-primary'>Next Page</button>
                </div>
            </div>
        </div>
    </form>"
               ?>
<br>

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
</body>
</html>



































