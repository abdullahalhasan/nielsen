<?php
    require '../db_qa.php';
    $operator_list_array = $_SESSION['internet_user_list'];
    $operator_count = count($operator_list_array);

    if (isset($_POST['d3_btn'])) {
        $array_count = 0;
        $_SESSION['data_count'] = $array_count;
        for ($i=0;$i<$operator_count;$i++) {
            $qid = 'D3'.$operator_list_array[$i];
            $aid = $_POST['Brand_number_radio'.$i];
            dba_start($qid,$aid);
            /*echo $qid.$aid;
            echo "<br>";*/
        }
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
            echo "<script type='text/javascript'> location.href='tp_1a.php'</script>";
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

    <h1>Data Usage Section </h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>D3:<h5/>
            <p>
            <h6>How satisfied you are with your mobile phone service provider’s Data Service? [Ask respondents about mobile operators selected in Q101d] Please answer using a scale of 0 to 10, where 0 is Highly Dissatisfied and 10 is Exremely Satisfied. [SA]
                <br><br> শুধুমাত্র ডাটা বা ইন্টারনেট ব্যবহারের অভিজ্ঞতার কথা চিন্তা করে বলুন আপনার অপারেটরের ইন্টারনেট সেবা নিয়ে আপনি কতখানি সন্তুষ্ট বা অসন্তুষ্ট?আপনার উত্তরটি 0 থেকে ১০ সংখ্যার মধ্যে দিন যেখানে 0= খুবই অসন্তুষ্ট এবং ১০=অত্যন্ত সন্তুষ্ট
                [একটি উত্তর]
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
            for ($i = 0; $i < $operator_count; $i++) {
                echo '<form action="data_d3.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-2 pt-0">' . $operator_list_array[$i] . ': </legend>
                        <div class="col-md-10">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="00" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="01" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                   01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="Brand_number_other" value="02" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                   02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="Brand_number_other" value="03" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                   03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="04" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                   04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="05" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                   05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="06" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                  06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="07" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                   07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="08" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                  08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_Brand_number" value="09" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio' . $i . '" id="radio_other" value="10" required>
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
        <button type="submit" name="d3_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
