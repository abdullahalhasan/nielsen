<?php
require '../db_qa.php';
$operator_list_array = $_SESSION['internet_user_list'];
$operator_count = count($operator_list_array);

if (isset($_POST['d1_btn'])) {
    for ($i=0;$i<$operator_count;$i++) {
        $qid = 'D1'.$operator_list_array[$i];
        $aid =arr_concate( $_POST['gernder_radio'.$i]);
        dba_start($qid,$aid);
        /*echo $qid.$aid;
        echo "<br>";*/
    }
    //die;
    echo "<script type='text/javascript'> location.href='data_d2.php'</script>";
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

    <h1>Data Usage Section </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>D1 :<h5/>
            <p>
            <h6>You mentioned that you use Internet in your mobile device. Please let us know which form(s) of internet do you use? {MA}
                <br>[Probe the options]
                <br>[Mention the Brand Name as Q101d]
                <br><br>
                আপনিতো বললেন যে,  আপনি এই মোবাইল ফোনে ইন্টারনেট ব্যবহার করেন। দয়া করে বলুন,  কি কি  ধরনের ইন্টারনেট কানেকশন আপনি ব্যবহার করে থাকেন।  [প্রব করুন]  আর কিছু? আর কিছু? [Q101d প্রশ্নে উল্লিখিত ব্র্যান্ডগুলো দেখান]
                [একাধিক উত্তর]
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
            for($i = 0; $i<$operator_count; $i++) {
                echo '<form action="data_d1.php" method="post">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">' . $operator_list_array[$i] . ' : </legend>
                       <div class="col-md-10">
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio'.$i.'[]" id="radio_male" value="1" >
                                <label class="form-check-label" >
                                    2G
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;" >
                                <input class="form-check-input" type="checkbox" name="gernder_radio'.$i.'[]" id="radio_female" value="2" >
                                <label class="form-check-label" >
                                    3G
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio'.$i.'[]" id="radio_other" value="3" >
                                <label class="form-check-label" >
                                    4G
                                </label>
                            </div>
                            <div class="form-check col-md-2" style="float: left;">
                                <input class="form-check-input" type="checkbox" name="gernder_radio'.$i.'[]" id="radio_other" value="4" >
                                <label class="form-check-label" id="radio_other" value="5">
                                    WIFI
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
        <button type="submit" name="d1_btn" style="float: right" class="btn btn-primary">Next Page</button>
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




































