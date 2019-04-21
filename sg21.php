<?php
        if(isset($_POST['sg21button'])){
					$aid=$_POST['studied_radio'];
					if(isset($aid)){
						$qid="SG21";
					require 'db_qa.php';
					dba_start($qid,$aid);
					echo "<script type='text/javascript'> location.href='sg22.php'</script>";
				}
			}
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nelson</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
	<section>
		<nav class="navbar navbar-light bg-light">
		  	<a class="navbar-brand">Nelson Questionnaire</a>
		  	<form class="form-inline">
	    		<button class="btn btn-outline-success" type="button">View Answers</button>
	  		</form>
		</nav>
	</section>
    <br>
	<div class="container">
	  <div class="panel-heading col-md-12">
		<h2 class="panel-title">SEC GRID </h2>
	  </div>
	</div>
	
	
	<br>
	<div class="container">
        <div class="col-md-12">
	        <p>S.G.1: I would like to know something about the main earner of your household. By main earner, I mean the person who contributes the maximum to the expenditure of your household.
                <br><br>এখন আমি আপনার পরিবারের প্রধান উপার্জনকারী সম্বন্ধে কিছু জানতে চাইব। প্রধান উপার্জনকারী বলতে আমি বোঝাতে চাইছি, যিনি সংসার খরচের বেশীরভাগ টাকা দেন।</p>
        </div>
	</div>
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12" >
                <div class="container">
					<div class="col-md-12" style="border:1px solid;">
						<p>
							<h6>S.G.2.1: 
							<br><br>
								How much has he/ she studied?</h6> 
							<br>
								উনি কতদূর পর্যন্ত পড়াশোনা করার সুযোগ পেয়েছেন?
						</p>
					</div>
					<br>
					<br>
				</div>

	
				
				<div class="container">
					<div class="col-md-12" style="border:1px solid;height: auto;">
<form action ="sg21.php" method="post">
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Illiterate" value="1" required>
							  <label class="form-check-label" for="studied_radio1">
								Illiterate/Only Sign/ Literate, no school/ লেখাপড়া জানেনা/ শুধুমাত্র স্বাক্ষর করতে পারে/লেখাপড়া জানে কিন্তু স্কুলে যায়নি
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Literate_with_no_formal_education" value="2" required>
							  <label class="form-check-label" for="studied_radio2">
								School up to 5 yrs / ৫ম শ্রেণী পর্যন্ত পড়েছে 
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Class_4" value="3" required>
							  <label class="form-check-label" for="studied_radio3">
								School up to 6-10 / ষষ্ঠ থেকে ১০ম শ্রেণী পর্যন্ত পড়েছে  
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Class_5_to_9" value="4" required>
							  <label class="form-check-label" for="studied_radio4">
								SSC/ Dakhil / এসএস সি/ দাখিল
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_S_S_C" value="5" required>
							  <label class="form-check-label" for="studied_radio5">
								HSC/ Alim / এইচএস সি/ আলিম
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Have_some_college_education_but_not_graduate" value="6" required>
							  <label class="form-check-label" for="studied_radio6">
								Grad (gen) / Fazel/ স্নাতক/ ফাজিল
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_General_Graduate_or_above" value="7" required>
							  <label class="form-check-label" for="studied_radio7">
								Grad (prof)/ স্নাতক(প্রফেশনাল)/ কামিল
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Professional_Graduate_or_above" value="8" required>
							  <label class="form-check-label" for="studied_radio8">
								Masters(gen)/title/স্নাতকোত্তর(জেনারেল)/টাইটেল
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="studied_radio" id="radio_Professional_Graduate_or_above" value="9" required>
							  <label class="form-check-label" for="studied_radio8">
								Masters(prof) /M.Phil/Ph.D. /স্নাতকোত্তর(প্রফেশনাল)/ এম ফিল/পিএইচডি
							  </label>
						</div>
					</div>
				</div>
            </div>

		</div>  
		<br>
		<div class="container" >
            <div class="form-group row float-right">
                <div class="col-sm-10">
                    <button type="submit" name="sg21button"class="btn btn-primary">Next Page</button>
                </div>
            </div>
	     </div>
	</div>
		 </form>





    <br>
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