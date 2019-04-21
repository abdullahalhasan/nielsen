<?php
    require '../db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);

    if (isset($_POST['css1_btn'])) {
        for ($i=0;$i<$operator_count;$i++) {
            $qid = 'CSS1'.$operator_list_array[$i];
            $aid = $_POST['radio'.$i];
            dba_start($qid,$aid);
            /*echo $qid.$aid;
            echo "<br>";*/
        }
        echo "<script type='text/javascript'> location.href='css2.php'</script>";
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

    <h1>CUSTOMER SATISFACTION SCORE </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>CSS1:<h5/>
            <p>
            <h6>How satisfied you are with your following mobile phone service provider [Mention the brand names by name as mentioned in Q101a]? Please answer using a scale of 0 to 10, where 0 is Highly Dissatisfied and 10 is Exremely Satisfied. [SA]
                <br><br>দয়া করে বলুন, ____ [ Q101a প্রশ্নে উত্তরদাতার নির্বাচিত কোডটি পড়ে শোনান] ___ এই অপারেটরের সার্ভিস ব্যবহার করে আপনি কতখানি সন্তুষ্ট বা অসন্তুষ্ট?

                <br><br>আপনার উত্তরটি 0 থেকে ১০ সংখ্যার মধ্যে দিন যেখানে 0= খুবই অসন্তুষ্ট এবং ১০=অত্যন্ত সন্তুষ্ট [একটি উত্তর]
                (মনে রাখবেন এখানে ভুল বা শুদ্ধ বলে কিছু নেই। আমরা শুধুমাত্র আপনার মতামতটি জানতে চাচ্ছি)


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
            <form action="css1.php" method="post">
                <?php
                for ($i = 0; $i < $operator_count; $i++) {
                    echo '<fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-2 pt-0">' . $operator_list_array[$i] . ':</legend>
                        <div class="col-md-10">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="00" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="01" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                   01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="Brand_number_other" value="02"  required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                   02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="Brand_number_other" value="03" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                   03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="04" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                   04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="05" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                   05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="06" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                  06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="07" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                   07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="08" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                  08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_Brand_number" value="09" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   09
                                </label>
                            </div>
                            <div class="form-check col-md-1 " style="float: left;">
                                <input class="form-check-input" type="radio" name="radio' . $i . '" id="radio_other" value="10" required>
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
        <button type="submit" name="css1_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
