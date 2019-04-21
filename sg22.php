<?php
        if(isset($_POST['sg22button'])){
					$aid=$_POST['occupation'];
					if(isset($aid)){
						require 'db_qa.php';
						$qid="SG22";
						dba_start($qid,$aid);
					echo "<script type='text/javascript'> location.href='q101a.php'</script>";
				}}
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
							<h6>S.G.2.2: 
							<br><br>
								And what is his/ her occupation?</h6> 
							<br>
								উনি কী করেন?
						</p>
					</div>
					<br>
					<br>
				</div>
				
<form action="sg22.php" method="post" >

				<div class="container">
					<div class="col-md-12" style="border:1px solid;height: auto;">
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_advertising_agency" value="01" required>
							  <label class="form-check-label" for="occupation1">
								Unskilled worker / অদক্ষ কর্মী
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_public_relations" value="02" required>
							  <label class="form-check-label" for="occupation3">
								Petty trader / ক্ষুদ্র ব্যবসায়ী    
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_mrket_research_agency" value="03" required>
							  <label class="form-check-label" for="occupation2">
								Skilled worker / দক্ষ কর্মী  
							  </label>
						</div>
						
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_mass_media" value="04" required>
							  <label class="form-check-label" for="occupation4">
								Salesman/Clerk / কেরানী / দোকানের সেলসম্যান
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_telecommunications_including_manufacturer" value="05" required>
							  <label class="form-check-label" for="occupation5">
								Supervisor / সুপারভাইজার পদে
চাকুরীজীবী
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="06" required>
							  <label class="form-check-label" for="occupation6">
								Shop owner / দোকানের মালিক 
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="07" required>
							  <label class="form-check-label" for="occupation7">
								Business : staff: none/ ব্যবসায়ী
কিন্তু কর্মচারী খাটান না
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="08" required>
							  <label class="form-check-label" for="occupation8">
								House owner / বাড়ীওয়ালা
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="09" required>
							  <label class="form-check-label" for="occupation9">
								Business owner : Staff: 1–9 /
ব্যবসায়ী/শিল্পপতি ১-৯ জন
কর্মচারী খাটান
							  </label>
						</div>
					
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="10" required>
							  <label class="form-check-label" for="occupation11">
								Officer/executive / জুনিয়র অফিসার
এক্সিকিউটিভ
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="12" required>
							  <label class="form-check-label" for="occupation10">
								Self-employed professional / স্ব-
উপার্জনকারী/ পেশাজীবী
যেমন- ডাক্তার/
ইঞ্জিনিয়ার/উকিল ইত্যাদি
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="13" required>
							  <label class="form-check-label" for="occupation12">
								Business owner: staff- 10+ staff/
ব্যবসায়ী/শিল্পপতি ১০+ জন
কর্মচারী খাটান
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="14" required>
							  <label class="form-check-label" for="occupation12">
								Officer/executive: Mid / সিনিয়র
অফিসার এক্সিকিউটিভ
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="15" required>
							  <label class="form-check-label" for="occupation12">
								Agri laborer/ নিজের জমিতে চাষ করে
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="16" required>
							  <label class="form-check-label" for="occupation12">
								Agri Worker / অন্যের জমিতে চাষ
করে
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="17" required>
							  <label class="form-check-label" for="occupation12">
								Cultivate - < 1 hectors (< 2.5 acres) / ১ হেক্টরের কম/
২.৫ একরের কম জমির মালিক
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="18" required>
							  <label class="form-check-label" for="occupation12">
								Cultivate - 1-5 hectors (2.5-12.5
acres) / ১-৫ হেক্টর/ ২.৫ –
১২.৫ একর জমির মালিক
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="19" required>
							  <label class="form-check-label" for="occupation12">
								Cultivate - 5+ to 10 hectors
(12.5+ to 25 acres) / ৫+ -
১০ হেক্টর/ ১২.৫ – ২৫ একর
জমির মালিক 
							  </label>
						</div>
						<div class="form-check">
							  <input class="form-check-input" type="radio" name="occupation" id="radio_none_of_the_above" value="20" required>
							  <label class="form-check-label" for="occupation12">
								Cultivate - 10+ hectors (25+
acres) / ১০+ হেক্টর/ ২৫+
একর জমির মালিক
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
                    <button type="submit" name="sg22button" class="btn btn-primary">Next Page</button>
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