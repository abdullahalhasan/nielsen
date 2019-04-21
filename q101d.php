<?php
    require  'db_qa.php';
    $op1 = $_SESSION['top_one'];
    $op2 = $_SESSION['top_two'];
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);
    if (isset($_POST['q101d_btn'])) {

        //db insert
        for($i=0;$i<$operator_count;$i++) {
            $qid= "Q101d".$operator_list_array[$i];
            $aid = $_POST['Connection_radio'.$i];
            //echo $qid.$aid."<br>";
            dba_start($qid,$aid);
        }
        for ($i = 0; $i<$operator_count; $i++) {
            $net_user = $_POST['Connection_radio'.$i];

            if ($net_user == "YES") {

                if (($operator_list_array[$i] == $op1)
                    || ($operator_list_array[$i] == $op2)) {
                    $internet_user_list[] = $operator_list_array[$i];
                }
            }
        }

        $_SESSION['internet_user_list'] = $internet_user_list;
        echo "<script type='text/javascript'> location.href='q101e.php'</script>";

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

    <h1>Q101d</h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-12" style="border:1px solid;">
        <h5>Q101d:</h5>
            <h6>Do you use mobile internet through this connection? <br><br> আপনি আপনার এই সংযোগটি দিয়ে কি মোবাইল ইন্টারনেট ব্যবহার করেন?  </h6>
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
                
                echo '<form action="q101d.php" method="post">
                    <fieldset class="form-group">
                        <div class="row" style="margin-top: 40px;">
                            <legend class="col-form-label col-sm-2 pt-0">'.$operator_list_array[$i].' :</legend>
                            <div class="col-md-10">
                                <div class="form-check col-md-2" style="float: left;">
                                    <input class="form-check-input" type="radio" name="Connection_radio'.$i.'" id="YES'.$i.'"
                                           value="YES" required';
                                            echo '>
                                    <label class="form-check-label" for="Connection_radio1">
                                        YES
                                    </label>
                                </div>

                                <div class="form-check col-md-2" style="float: left;">
                                    <input class="form-check-input" type="radio" name="Connection_radio'.$i.'" id="NO"
                                           value="NO" required>
                                    <label class="form-check-label" for="Connection_radio2">
                                        NO
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
    <div class="form-group row float-right">
        <div class="col-sm-10">
            <button type="submit" name="q101d_btn" class="btn btn-primary">Next Page</button>
        </div>
    </div>
</div>
</form>';
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

<script>
var flag_id="<?php $flag_id?>";
var radio_style= documnet.getElementById(flag_id);
radio_style.checked=true;
</script>