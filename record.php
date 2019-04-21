<?php
				 require  'db_qa.php';


    if (isset($_POST['record_button'])) {
				$Operator_radio = $_POST['Operator_radio'];
				$phone_number=$_POST['telephone_no'];
				$gender=$_POST['gernder_radio'];
				$center_radio=$_POST['center_radio'];
				$data_radio=$_POST['data_radio'];
				$dist=$_POST['dist'];
				$thana=$_POST['thana'];
		    if (isset($Operator_radio)) {
						$_SESSION['phn_num']=$phone_number;
						$_SESSION['operator_name'] = $Operator_radio;
						//$_SESSION['data_user']=$data_radio;
				

					 dba_start("R1",$phone_number);
					 switch ($Operator_radio) {
						 case 'GP':
						 dba_start("R2","1");
							 break;
						 case 'BL':
							 # code...
							 dba_start("R2","2");
							 break;
						 case 'Robi':
							 # code...
							 dba_start("R2","3");
							 break;
						 case 'Airtel':
							 # code...
							 dba_start("R2","4");
							 break;
						 case 'TT':
							 # code...
							 dba_start("R2","5");
							 break;
						 
						 default:
							 # code...
							 break;
					 }
					 
					 dba_start("R3",$gender);
					 dba_start("R4",$dist);
					 dba_start("R5",$thana);
					 dba_start("R6",$center_radio);
					 //dba_start("R7",$data_radio);
					 echo "<script type='text/javascript'> location.href='sq1.php'</script>";
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

<style type="text/css">


#lamim {
    display: block;
}
#thana_list{
	display:block;
}
</style>




	
	<section >
		<nav class="navbar navbar-light bg-light">
		  	<a class="navbar-brand">Nielsen Questionnaire</a>
		  	<form class="form-inline">
	    		<button class="btn btn-outline-success" type="button">View Answers</button>
	  		</form>
		</nav>
	</section>
    <br>
	<div class="container">
	  <div class="panel-heading">
		<h2 class="panel-title">Record Telephone Number</h2>
	  </div>
	</div>
	
	
	<br>
	<div class="container">
	
	
		<form action="record.php" method="post" >
	
	
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">R1. Telephone No</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="telephone_no" name="telephone_no"  placeholder="Telephone No" maxlength="11" min="1100000000" max="1999999999" required>
		    </div>
		  </div>
		  
		  <fieldset class="form-group" aria-required="true">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">R2. Operator Code </legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="Operator_radio" id="radio_gp" value="GP" required>
		          <label class="form-check-label" for="Operator_radio1">
		            GP
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="Operator_radio" id="radio_bl" value="BL" required>
		          <label class="form-check-label" for="Operator_radio2">
		            BL
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="Operator_radio" id="radio_robi" value="Robi" required>
		          <label class="form-check-label" for="Operator_radio3">
		            Robi
		          </label>
		        </div>
				<div class="form-check">
		          <input class="form-check-input" type="radio" name="Operator_radio" id="radio_airtel" value="Airtel" required>
		          <label class="form-check-label" for="Operator_radio4">
		            Airtel
		          </label>
		        </div>
				<div class="form-check">
		          <input class="form-check-input" type="radio" name="Operator_radio" id="radio_tt" value="TT" required>
		          <label class="form-check-label" for="Operator_radio5">
		            TT
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>
		  
		  <fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">R3. Gender</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gernder_radio" id="radio_male" value="01" required>
		          <label class="form-check-label" for="gernder_radio1">
		            Male
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gernder_radio" id="radio_female" value="02" required>
		          <label class="form-check-label" for="gernder_radio2">
		            Female
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>
		  <div class="form-group row">
		   <label for="inputEmail3" class="col-sm-2 col-form-label">R4. Dist Code</label>
		    <div id="" class="col-sm-4">
				<select class="form-control" id="dist" name="dist"  onchange="changeFunc();" >
				<option value="1" selected="selected">Bagerhat বাগেরহাট</option>
				<option value="2" >Bandarban বান্দরবান</option>
				<option value="3">Barguna বরগুনা</option>
				<option value="4" >Barisal বরিশাল</option>
				<option value="5">Bhola ভোলা</option>
				<option value="6">Bogra বগুড়া</option>
				<option value="7">Brahmanbaria ব্রাহ্মণবাড়িয়া</option>
				<option value="8">Chandpur চাঁদপুর</option>
				<option value="9">Chapai Nawabganj চাঁপাই নবাবগঞ্জ</option>
				<option value="10">Chittagongচট্টগ্রাম</option>
				<option value="11">Chuadanga চুয়াডাঙ্গা</option>
				<option value="12">Comilla কুমিল্লা</option>
				<option value="13" > Cox's Bazar কক্সবাজার</option>
				<option value="14" selected="selected"> Dhaka ঢাকা</option>
				<option value="15">Dinajpur দিনাজপুর</option>
				<option value="16">Faridpurফরিদপুর</option>
				<option value="17">Feni ফেনী</option>
				<option value="18">Gaibandha গাইবান্ধা</option>
				<option value="19">Gazipurগাজীপুর</option>
				<option value="20">Gopalganj গোপালগঞ্জ</option>
				<option value="21">Habiganj হবিগঞ্জ</option>
				<option value="22">Jamalpurজামালপুর</option>
				<option value="23">Jessore যশোর</option>
				<option value="24">Jhalakati ঝালকাঠী</option>
				<option value="25"> Jhenaidah ঝিনাইদহ</option>
				<option value="26">Joypurhatজয়পুরহাট</option>
				<option value="27">Khagrachari খাগড়াছড়ি</option>
				<option value="28">Khulna খুলনা</option>
				<option value="29">Kishorganj কিশোরগঞ্জ</option>
				<option value="30">Kurigramকুড়িগ্রাম</option>
				<option value="31">Kushtia কুষ্টিয়া</option>
				<option value="32">Lakshimpur লক্ষ্মীপুর</option>
				<option value="33">Lalmonirhat লালমনিরহাট</option>
                    <option value="35">Magura মাগুরা</option>
				<option value="36"> Manikganj মানিকগঞ্জ</option>
				<option value="37"> Maulvibazar মৌলভীবাজার</option>
				<option value="38"> Meherpur মেহেরপুর</option>
				<option value="39">Munshiganj মুন্সিগঞ্জ</option>
				<option value="40">Mymensinghময়মনসিংহ</option>
				<option value="41">Naogaon    নওগাঁ</option>
				<option value="42">Narail নড়াইল</option>
				<option value="43">Narayangang নারায়ণগঞ্জ</option>
				<option value="44">Narshindiনরসিংদী</option>
				<option value="45">Natore নাটোর</option>
				<option value="46"> Netrokona নেত্রোকোনা</option>
				<option value="47"> Nilphamari নীলফামারী</option>
				<option value="48"> Noakhali নোয়াখালী</option>
				<option value="49">Pabna পাবনা</option>
				<option value="50">Panchgarhপঞ্চগড়</option>
				<option value="51">Patuakhali পটুয়াখালী</option>
				<option value="52">Rajbari রাজবাড়ী</option>
				<option value="53"> Thakurgaon ঠাকুরগাঁও</option>
				<option value="54">Rajshahi রাজশাহী</option>
				<option value="55">Rangamati রাঙ্গামাটি</option>
				<option value="56">Rangpur    রংপুর</option>
				<option value="57"> Satkhira সাতক্ষীরা</option>
				<option value="58">Shariatpur শরিয়তপুর</option>
				<option value="59">Sherpur শেরপুর</option>
				<option value="60">Sirajganj  সিরাজগঞ্জ</option>
				<option value="61">Sunamganj সুনামগঞ্জ</option>
				<option value="62">Sylhet সিলেট</option>
				<option value="63"> Tangail  টাঙ্গাঈল</option>
				<option value="64">Thakurgaon ঠাকুরগাঁও</option>
				
      
    </select>
		    </div>
		  </div>
		  <div class="form-group row" style="diplay:none;" >
		    <label id="thana_list" for="inputEmail3" class="col-sm-2 col-form-label">R5. Thana Code</label>
		    <div id="thana" class="col-sm-4" >
				<select class="form-control" id="lamim" name="thana" style="diplay:none;">
				<option value="1">Adabor আদাবর </option>
				<option value="2">Airport এয়ারপোর্ট </option>
				<option value="3">Badda বাড্ডা</option>
				<option value="4">Bangshal বংশাল</option>
				<option value="5">Cantonment ক্যান্টনমেন্ট</option>
				<option value="6">Chalkbazar চকবাজার</option>
				<option value="7">Darussalam দারুস সালাম</option>
				<option value="8">Demra ডেমরা</option>
				<option value="9">Dhanmondi ধানমন্ডি</option>
				<option value="10">Dohar দোহার</option>
				<option value="11">Dokkhinkhan দক্ষিনখান</option>
				<option value="12">Gulshan গুলশান</option>
				<option value="13 ">Hazaribagh হাজারিবাগ </option>
				<option value="14">Jatrabari যাত্রাবাড়ী</option>
				<option value="15">Kadamtoli কদমতলি</option>
				<option value="16">Kafrul কাফরুল</option>
				<option value="17">Kala Bagan কলাবাগান</option>
				<option value="18">Kamrangirchar কামরাংগীর চর</option>
				<option value="19">Keraniganj কিরানিগঞ্জ</option>
				<option value="20">Khilgaon খিলগাও</option>
				<option value="21">Khilkhet খিলক্ষেত</option>
				<option value="22">Kotwali Dhaka কোতোয়ালী ঢাকা</option>
				<option value="23">Lalbagh লালবাগ</option>
				<option value="24">Mirpur মীরপুর</option>
        <option value="25">Mohammadpur মোহাম্মাদপুর</option>
				<option value="26">>Motijheel মতিঝিল</option>
				<option value="27">Mugda মুগদা</option>
				<option value="28">Nawabganj Dhk. নবাবগঞ্জ ঢাকা</option>
				<option value="29 ">New Market নিউমার্কেট </option>
				<option value="30">Pallabi পল্লবী</option>
				<option value="31">Ramna রমনা</option>
				<option value="32 ">Rampura রামপুরা </option>
				<option value="33">Rupnagar রুপনগর</option>
				<option value="34">Sabujbagh  সবুজবাগ </option>
				<option value="35">Shah ali শাহ আলী</option>
				<option value="36">Shahbagh শাহবাগ</option>
				<option value="37">Sher E Bangla Nagar শের-ই-বাংলানগর</option>
				<option value="38">Shyampur শ্যামপুর</option>
				<option value="39">Sutrapur সুত্রাপুর</option>
				<option value="40">Turag তুরাগ </option>
				<option value="41">Uttara উত্তরা</option>
				<option value="42">Uttarkhan উত্তরখান</option>
				<option value="43">Vasantake ভাসানটেক </option>
				<option value="44">Vatara ভাটারা</option>
				<option value="45 ">Wari ওয়ারি </option>

				



				
      
    </select>
		    </div>
		  </div>
		   <fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">R6. Center Type</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="center_radio" id="radio_urban" value="01" required>
		          <label class="form-check-label" for="center_radio1">
		            Urban
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="center_radio" id="radio_semi_urban" value="02" required>
		          <label class="form-check-label" for="center_radio2">
		            Semi-Urban
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="center_radio" id="radio_rural" value="03" required>
		          <label class="form-check-label" for="center_radio3">
		            Rural
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>
		  
		  <!--fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">R7. Data Usage</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="data_radio" id="radio_data_user" value="01" required>
		          <label class="form-check-label" for="data_radio1">
		            Data User
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="data_radio" id="radio_non_user" value="02" required>
		          <label class="form-check-label" for="data_radio2">
		            Non-User
		          </label>
		        </div>
		        
		      </div>
		    </div>
		  </fieldset-->

		  <!--nextbutton-->
		  <div class="form-group row float-right">
		    <div class="col-sm-10">
		      <button type="submit" name="record_button" class="btn btn-primary">Next Page</button>
		    </div>
		  </div>

		</form>


   
   

	</div>
    <br>
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
</body>
</html>
<script type="text/javascript">

    function changeFunc() {
        var selectBox = document.getElementById("dist");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var x = document.getElementById("lamim");
        //	var c=document.getElementById("thana_list");

        if (selectedValue=="14") {
            //		c.style.display="bock";
            x.style.display = "block";

        }
        else{
            x.style.display="none";
            //	c.style.display="none";
        }
    }
</script>