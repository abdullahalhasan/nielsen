<?php
       require 'db_qa.php';
        $r2_op = $_SESSION['operator_name'];
        if(isset($_POST['nps1abutton'])){
            $radio_button=$_POST['Brand_number_radio'];
            $aid=$radio_button;
            $qid="NPS1a";
            dba_start($qid,$aid);
            if($radio_button>5 and $radio_button<9 ){
                echo "<script type='text/javascript'> location.href='section2/nps2b.php'</script>";
             }
             elseif($radio_button>8){
                 echo "<script type='text/javascript'> location.href='section1/nps2a.php'</script>";
             }
             else{
                 echo "<script type='text/javascript'> location.href='section3/nps2c.php'</script>";
             }
             
        }
        
        
        
        ?>



<!DOCTYPE html>
<html>
<head>
    <title>Nielsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
<section class="container">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Neilsen Questionnaire</a>
    <form class="form-inline">
        <button class="btn btn-outline-success" type="button">View Answers</button>
    </form>
</nav>
</section>

<br><br>

<div class="container">

    <h1>NPS Selection</h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-10" style="border:1px solid;">
        <h5>NPS1a:</h5>
            <p>
                <h6>
					How likely are you to recommend your current mobile phone service provider
                <b><?php echo $r2_op ?></b> to a friend or relative? Please answer using a scale of 0 to 10, where 0 is would not recommend at all and 10 is will definitely recommend.[SA]
		            <br><br>
		কেউ যদি মোবাইল সিম ব্যবহারের বিষয়ে আপনার মতামত জানতে চায়, সেক্ষেত্রে তাকে <b><?php echo $r2_op ?></b> কোম্পানির সিম ব্যবহারের পরামর্শ দেওয়ার সম্ভাবনা কতটুকু?
                পরামর্শ দেওয়ার উপর ভিত্তি করে আপনি <b><?php echo $r2_op ?></b> সিমকে ০ থেকে ১০ এর মধ্যে কত নম্বর দিবেন? যদি পরামর্শ দেওয়ার সম্ভাবনা বেশি থাকে তাহলে বেশির দিকে নম্বর দিবেন, আর যদি কম থাকে তাহলে কমের দিকে নম্বর দিবেন।
		এখানে, 
                ০ মানে একদম ই পরামর্শ দিবেন না
		১০ মানে অবশ্যই পরামর্শ দিবেন 
		(মনে রাখবেন এখানে ভুল বা শুদ্ধ বলে কিছু নেই। আমরা শুধুমাত্র আপনার মতামতটি জানতে চাচ্ছি) 
		             <br><br>
		            </h6>
            <br>
            </p>
    </div>

</div>
<br>
<br>
</div>

<div class="container">
    <div class="col-md-10" style="border:1px solid;height: suto">


        <div class="container">
            <form action="nps1a.php" method="post">
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-md-6 pt-0">Likelihood of recommending:</legend>
                        <div class="col-md-12">
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="01" required>
                                <label class="form-check-label" for="Brand_number_radio1">
                                    00
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;" >
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="01" required>
                                <label class="form-check-label" for="Brand_number_radio2">
                                   01
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="Brand_number_other" value="02" required>
                                <label class="form-check-label" for="Brand_number_radio3">
                                   02
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="Brand_number_other" value="03" required>
                                <label class="form-check-label" for="Brand_number_adio4">
                                   03
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="04" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio4">
                                   04
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="05" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio5">
                                   05
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="06" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio6">
                                  06
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="07" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio7">
                                   07
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="08" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio8">
                                  08
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_Brand_number" value="09" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   09
                                </label>
                            </div>
                            <div class="form-check col-md-1" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_other" value="10" required>
                                <label class="fo Rrm-check-label" for="Brand_number_radio3">
                                   10
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
        </div>

</div>
</div>

<br>

<div class="container">
<div class="col-md-10">
    <button type="submit" name="nps1abutton" style="float: right" class="btn btn-primary">Next Page</button>
</div>
</div>
</form>

    
            

            

           

<br><br><br>

<section>
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#"> Nielsen.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</section>
