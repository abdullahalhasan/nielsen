<?php
    require 'db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);

    if (isset($_POST['q101e_btn'])) {
        //db insert
        $qid= "Q101e".$operator_list_array[$i];
        $aid = $_POST['Operator_radio'];
        //echo $qid.$aid."<br>";
        dba_start($qid,$aid);
        echo "<script type='text/javascript'> location.href='nps1a.php'</script>";
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

    <h1>Q101e</h1>

</div>
<br><br>

<div class="container">
    <div class="col-md-12" style="border:1px solid;">
        <h5>Q101e :<h5/>
            <h6>Out of all the connections you are using, which one is your main connection? [SA]
                <br><br>আপনি যেসকল অপারেটরের সিম ব্যবহার করছেন সেগুলর মধ্যে কোনটি সবচেয়ে বেশী ব্যবহার করেন? [একটি উত্তর]
            </h6>
            <br>
    </div>
</div>
<br>
<br>


<div class="container">


    <div class="col-md-12" style="border:1px solid;height: auto;">

        <div class="col-sm-12">
            <?php
            for($i = 0; $i<$operator_count; $i++) {
            echo '<form action="q101e.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Operator_radio" id="radio_gp" value="'.$operator_list_array[$i].'" required>
                <label class="form-check-label" for="Operator_radio1">
                    '.$operator_list_array[$i].'
                </label>
            </div>';
            }
        echo '</div>
    </div>
</div>


<br>

<div class="container">
    <div class="form-group row float-right">
        <div class="col-md-10">
            <button type="submit" name="q101e_btn" class="btn btn-primary">Next Page</button>
        </div>
    </div>
</div>
</form>'
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




































