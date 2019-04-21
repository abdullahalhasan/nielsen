<?php
require '../db_qa.php';
$operator_list_array = $_SESSION['operator_list_array'];
$operator_count = count($operator_list_array);
$tp_op_list = $operator_list_array;
$array_count = 0;
$_SESSION['tp_op_count'] = $array_count;
//echo $operator_list_array[$array_count];
if (isset($_POST['tp1_btn'])) {
    $tp_count = $_SESSION['tp1_count'];
    $tt_values = $_POST[$array_count.'_radio'];
    $tp_count ++;
    $_SESSION['tp1_count'] = $tp_count;
    $_SESSION['tt_values'] = $tt_values;

    $qid = 'TP1e';
    $aid = $_POST[$array_count.'_radio'];
    dba_start($qid,arr_concate($aid));

    //die;
    //echo json_encode($gp_values);
    if (1==2) {
        unset( $tp_op_list[$array_count]);
        //echo json_encode($tp_op_list);
        $_SESSION['tp_opt_list'] = $tp_op_list;
        $_SESSION['tp_op_count'] = $array_count++;
        if ($tp_count != $operator_count) {
            if($operator_list_array[$tp_count] == "GP"){
                echo "<script type='text/javascript'> location.href='tp_1a.php'</script>";
            } else if($operator_list_array[$tp_count] == "BL"){
                echo "<script type='text/javascript'> location.href='tp_1b.php'</script>";
            } else if($operator_list_array[$tp_count] == "Airtel"){
                echo "<script type='text/javascript'> location.href='tp_1d.php'</script>";
            } else if($operator_list_array[$tp_count] == "Robi"){
                echo "<script type='text/javascript'> location.href='tp_1c.php'</script>";
            } else if($operator_list_array[$tp_count] == "TT"){
                echo "<script type='text/javascript'> location.href='tp_1e.php'</script>";
            }

        } else {
            echo "<script type='text/javascript'> location.href='css1.php'</script>";
        }
    } else {
        $_SESSION['tp_opt_list'] = $tp_op_list;
        if ($tp_count != $operator_count) {
            if($operator_list_array[$tp_count] == "GP"){
                echo "<script type='text/javascript'> location.href='tp_1a.php'</script>";
            } else if($operator_list_array[$tp_count] == "BL"){
                echo "<script type='text/javascript'> location.href='tp_1b.php'</script>";
            } else if($operator_list_array[$tp_count] == "Airtel"){
                echo "<script type='text/javascript'> location.href='tp_1d.php'</script>";
            } else if($operator_list_array[$tp_count] == "Robi"){
                echo "<script type='text/javascript'> location.href='tp_1c.php'</script>";
            } else if($operator_list_array[$tp_count] == "TT"){
                echo "<script type='text/javascript'> location.href='tp_1e.php'</script>";
            }

        } else {
            $tp_op_count = 0;
            $_SESSION['tp_2_count'] = $tp_op_count;

            if ($tp_op_count != $operator_count) {
                if ($operator_list_array[$tp_op_count] == "GP") {
                    echo "<script type='text/javascript'> location.href='tp_2a.php'</script>";
                } else if ($operator_list_array[$tp_op_count] == "BL") {
                    echo "<script type='text/javascript'> location.href='tp_2b.php'</script>";
                } else if ($operator_list_array[$tp_op_count] == "Airtel") {
                    echo "<script type='text/javascript'> location.href='tp_2d.php'</script>";
                } else if ($operator_list_array[$tp_op_count] == "Robi") {
                    echo "<script type='text/javascript'> location.href='tp_2c.php'</script>";
                } else if ($operator_list_array[$tp_op_count] == "TT") {
                    echo "<script type='text/javascript'> location.href='tp_2e.php'</script>";
                }
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
    <a class="navbar-brand">Nielsen Questionnaire</a>
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
    <div class="col-md-12" style="border:1px solid;">
        <h5>TP1a:<h5/>
            <p>
                Do You? if [TT is selected in q101a]
                <br>
            </p>
    </div>

</div>
<br>
<br>
</div>

<div class="container">
    <div class="col-md-12" style="border:1px solid;height: auto;">


        <div class="container">
            <form action="tp_1e.php" method="post">
            <fieldset class="form-group">
                    <div class="row"  style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Did you…Called at their Call Center in last 1 month? / গত ১ মাসের মধ্যে কল সেন্টারে ফোন দিয়েছেন
                            :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                                    echo '<div class="form-check col-md-2"  id="div1"  style="display:true;float: left;">
                                    <input class="form-check-input" type="checkbox"  name="'.$array_count.'_radio[]" id="chk1" value="1" >         
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Visited their Website in last 1 month / গত ১ মাসের মধ্যে অপারেটরের ওয়েবসাইটে গিয়েছেন
                            :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2"  id="div2"  style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk2" value="2"  >        
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Used their Mobile App in last 1 month? / গত ১ মাসের মধ্যে অপারেটরের মোবাইল  অ্যাপ ব্যবহার করেছেন
                        :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2"  id="div3"  style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk3" value="3"  >        
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Visited their Customer Service Centre in last 1 month গত ১ মাসের মধ্যে অপারেটরের গ্রাহক সেবা কেন্দ্রে গিয়েছেন
                            :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2"  id="div4"  style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk4" value="4" >         
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Received Company SMS in last 1 month / গত ১ মাসের মধ্যে অপারেটরের কোম্পানি থেকে এসএমএস পেয়েছেন
                        :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2"  id="div5"  style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk5" value="5" >         
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">Tried to connect with your operator in any other way in past 1 month / গত ১ মাসের মধ্যে অন্য যে কোন ভাবে অপারেটরের সাথে যোগাযোগ করার চেষ্টা করেছেন
                            :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2"  id="div6"  style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk6" value="6" >        
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-10 pt-0">NO / না
                        :</legend>
                        <div class="col-md-2" style="margin: auto">
                            <?php
                            echo '<div class="form-check col-md-2" id="div7" style="display:true; float: left;">
                                    <input class="form-check-input" type="checkbox" name="'.$array_count.'_radio[]" id="chk7" value="7" onclick="No_Checkbox()">        
                                    <label class="form-check-label" for="GP_radio1">
                                        Yes
                                    </label>
                                </div>';
                            ?>

                        </div>
                    </div>
                </fieldset>

        </div>

    </div>
</div>

<br>

<div class="container">
    <div class="col-md-12">
        <button type="submit" name="tp1_btn" style="float: right" class="btn btn-primary">Next Page</button>
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
<script>
function No_Checkbox(){
var chkbx1= document.getElementById("chk1");
var div1=document.getElementById("div1");
var div2=document.getElementById("div2");
var div3=document.getElementById("div3");
var div4=document.getElementById("div4");
var div5=document.getElementById("div5");
var div6=document.getElementById("div6");

var chkbx2= document.getElementById("chk2");
var chkbx3= document.getElementById("chk3");
var chkbx4= document.getElementById("chk4");
var chkbx5= document.getElementById("chk5");
var chkbx6= document.getElementById("chk6");
var chkbx_no = document.getElementById("chk7");
if(chkbx_no.checked){
chkbx1.checked=false;
chkbx2.checked=false;
chkbx3.checked=false;
chkbx4.checked=false;
chkbx5.checked=false;
chkbx6.checked=false;

div1.style.display="none";
div2.style.display="none";
div3.style.display="none";
div4.style.display="none";
div5.style.display="none";
div6.style.display="none";
}
else{
div1.style.display="block";
div2.style.display="block";
div3.style.display="block";
div4.style.display="block";
div5.style.display="block";
div6.style.display="block";
}

}

</script>
