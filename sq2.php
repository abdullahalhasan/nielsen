<?php
        if(isset($_POST['sq2button'])){
            $radio_button=$_POST['survey_radio'];
            if($radio_button=='2'){
                require 'db_qa.php';
                $qid="SQ2";
                $aid=$radio_button;
                dba_start($qid,$aid);
                echo "<script type='text/javascript'> location.href='sq3.php'</script>";
            }
            else{
                echo "<script type='text/javascript'> location.href='done.php'</script>";
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
        <section >
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Neilsen Questionnaire</a>
            <form class="form-inline">
                <button class="btn btn-outline-success" type="button">View Answers</button>
            </form>
        </nav>
        </section>

        <br><br>

        <div class="container">
            <div class="col-md-12">
                <h1 >SCREENING QUESTION</h1>
            </div>
        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <p>
                <h6>SQ2. 
				<br><br>
				Have you participated in any telecommunication related market research survey in the past 6 months? [SA] </h6>
				<br>
                বিগত ৬ মাসে আপনি মোবাইল সেবা দানকারী প্রতিষ্ঠান  বিষয়ক বাজার গবেষণায় অংশ নিয়েছেন কি? [একটি উত্তর]
                </p>
            </div>
            <br>
            <br>
        </div>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;height: auto;">
     <form action="sq2.php" method="post">       
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="survey_radio" id="radio_yes" value="1" required>
		          <label class="form-check-label" for="survey_radio1">
		            Yes / হ্যা
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="survey_radio" id="radio_no" value="2" required>
		          <label class="form-check-label" for="survey_radio2">
		            No / না
		          </label>
		    </div>
			
            </div>
        </div>

        <br>


        <!--nextbutton-->
		 <div class="container">
		 <div class="form-group row float-right">
		    <div class="col-sm-10">
		      <button type="submit" name="sq2button" class="btn btn-primary">Next Page</button>
		    </div>
		  </div>
		 </div>

         </form>
         
      


        <section>
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="#"> neilsen.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>