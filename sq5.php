<?php
if(isset($_POST['sq5button'])){
    $radio_button=$_POST['operator_radio'];
    if($radio_button=='less_than_6_months'){
        echo "<script type='text/javascript'> location.href='done.php'</script>";
    }
    else{
        echo "<script type='text/javascript'> location.href='sg21.php'</script>";
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
            <div class="col-md-12">
                <h1 >SCREENING QUESTION</h1>
            </div>
        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <p>
                <h6>SQ5. 
				<br><br>SIM USAGE<br><br>
				How long have you been using this number[show the operator respondent is called at] ?   </h6> 
				<br>
				SHOWCARD / [SA] অনুগ্রহ করে বলবেন কি আপনি কতদিন ধরে ____ কে প্রধান সংযোগ হিসেবে ব্যবহার করছেন?  
                </p>
            </div>
            <br>
            <br>
        </div>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;height: auto;">
<form action="sq5.php" method="post">
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_less_than_6_months" value="less_than_6_months" required>
		          <label class="form-check-label" for="operator_radio1">
		            Less Than 6 Months/ ৬ মাসের কম   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_6_12_month" value="6_12_month" required>
		          <label class="form-check-label" for="operator_radio2">
		            6-12 month /৬ - ১২ মাস   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio12_18_month" value="12_18_month" required>
		          <label class="form-check-label" for="operator_radio3">
		            12-18 month / ১২ - ১৮ মাস    
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_18_24_month" value="18_24_month" required>
		          <label class="form-check-label" for="operator_radio4">
		            18-24 month /১৮ – ২৪ মাস     
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_18_24_month" value="18_24_month" required>
		          <label class="form-check-label" for="operator_radio5">
		            24-30 months / ২৪ -৩০ মাস       
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_31_36_months" value="31_36_months" required>
		          <label class="form-check-label" for="operator_radio6">
		           31-36 months / ৩১ – ৩৬ মাস
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="operator_radio" id="radio_more_than_36_months" value="more_than_36_months" required>
		          <label class="form-check-label" for="operator_radio7">
		            more than 36 months / ৩৬ মাসের বেশি 
		          </label>
		    </div>
			
			
			
            </div>
        </div>

        <br>

           
		   
		 <div class="container" >
		 <div class="form-group row float-right">
		    <div class="col-sm-10">
		      <button type="submit" name="sq5button" class="btn btn-primary">Next Page</button>
		    </div>
		  </div>
		 </div>
	</form>


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