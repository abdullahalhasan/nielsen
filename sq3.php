<?php
        if(isset($_POST['sq3button'])){
			$radio_button=$_POST['range_radio'];
			$qid="SQ3";
			$aid=$radio_button;
			require 'db_qa.php';
			dba_start($qid,$aid);
            if($radio_button=='01' ){
				
                echo "<script type='text/javascript'> location.href='done.php'</script>";
            }
            elseif( $radio_button=='08' ){
                echo "<script type='text/javascript'> location.href='done.php'</script>";
			}
			else{
				echo "<script type='text/javascript'> location.href='sq4.php'</script>";
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
                <h6>SQ3. 
				<br><br>
				Which age range do you belong to? </h6> 
				<br>
					আপনি এর মধ্যে কোন বয়সসীমার মধ্যে পড়েন?
                </p>
            </div>
            <br>
            <br>
        </div>
<form action="sq3.php" method="post">
        <div class="container">
            <div class="col-md-12" style="border:1px solid;height: auto;">
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_Below_15" value="01" required>
		          <label class="form-check-label" for="range_radio1">
		            Below 15 /১৫ বছরের নীচে
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_15_17" value="02" required>
		          <label class="form-check-label" for="range_radio2">
		            15-17 / ১৫-১৭   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_18_24" value="03" required>
		          <label class="form-check-label" for="range_radio3">
		           18-24/ ১৮-২৪   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_25_34" value="04" required>
		          <label class="form-check-label" for="range_radio4">
		            25-34/ ২৫-৩৪   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_35_44" value="05" required>
		          <label class="form-check-label" for="range_radio5">
		           35-44/ ৩৫-৪৪   
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_45_54" value="06" required>
		          <label class="form-check-label" for="range_radio6">
		            45-54/ ৪৫-৫৪
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_55_60" value="07" required>
		          <label class="form-check-label" for="range_radio7">
		            55-60/ ৫৫-৬০
		          </label>
		    </div>
			<div class="form-check">
		          <input class="form-check-input" type="radio" name="range_radio" id="radio_more_than_60" value="08" required>
		          <label class="form-check-label" for="range_radio8">
		            More than 60/ ৬০ বছরের চেয়ে বেশী   
		          </label>
		    </div>
			
            </div>
        </div>

        <br>

           
		   
		 <div class="container" >
		 <div class="form-group row float-right">
		    <div class="col-sm-10">
		      <button type="submit" name="sq3button" class="btn btn-primary">Next Page</button>
		    </div>
		  </div>
		 </div>
		</form>

  <?php
        if(isset($_POST['sq3button'])){
            $radio_button=$_POST['range_radio'];
            if($radio_button=='Below_15' ){
                echo "<script type='text/javascript'> location.href='done.php'</script>";
            }
            elseif( $radio_button=='more_than_60' ){
                echo "<script type='text/javascript'> location.href='done.php'</script>";
			}
			else{
				echo "<script type='text/javascript'> location.href='sq4.php'</script>";
			}
        }
    ?>



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