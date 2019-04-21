<?php
require '../db_qa.php';
if(isset($_POST['xyz'])){
    $radio_button=$_POST['Brand_number_radio'];
    $qid="NPS2a";
    $aidm=$radio_button;
    if(isset($radio_button)){
        $checkboxArray=$_POST['gBrand_number_radio'];
        $aid=$aidm.','.arr_concate($checkboxArray);
        dba_start($qid,$aid);
        //dba_start($qid2,$aid2);

    $_SESSION['nps2b']=$checkboxArray;
    $count=0;
    $_SESSION['nps2b_count']=$count;
    
 
    switch ($radio_button) {
        case '01':
        echo "<script type='text/javascript'> location.href='1001b.php'</script>";
            break;

        case '02':
        echo "<script type='text/javascript'> location.href='2001b.php'</script>";
            break;
        
        case '03':
        echo "<script type='text/javascript'> location.href='3001b.php'</script>";
            break;
        case '04':
        echo "<script type='text/javascript'> location.href='4001b.php'</script>";
            break;
        case '05':
        echo "<script type='text/javascript'> location.href='5001b.php'</script>";
            break;
        case '06':
        echo "<script type='text/javascript'> location.href='6001b.php'</script>";
            break;
        case '07':
        echo "<script type='text/javascript'> location.href='7001b.php'</script>";
            break;
        case '08':
        echo "<script type='text/javascript'> location.href='8001b.php'</script>";
            break;
        case '09':
        echo "<script type='text/javascript'> location.href='9001b.php'</script>";
            break;
        case '10':
        echo "<script type='text/javascript'> location.href='10001b.php'</script>";
        
        break;
            case '11':
            echo "<script type='text/javascript'> location.href='11001b.php'</script>";
                break;

            case '12':
            echo "<script type='text/javascript'> location.href='12001b.php'</script>";
                break;
            
            case '13':
            echo "<script type='text/javascript'> location.href='13001b.php'</script>";
                break;
            case '14':
            echo "<script type='text/javascript'> location.href='14001b.php'</script>";
                        break;
            case '15':
            echo "<script type='text/javascript'> location.href='15001b.php'</script>";
        
                break;
            case '16':
            echo "<script type='text/javascript'> location.href='16001b.php'</script>";
            
                break;
            case '17':
            echo "<script type='text/javascript'> location.href='17001b.php'</script>";
            
                break;
            case '18':
            echo "<script type='text/javascript'> location.href='18001b.php'</script>";
            
                break;
        default:
            # code...
            break;
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
    <a class="navbar-brand">Neilsen Questionnaire</a>
    <form class="form-inline">
        <button class="btn btn-outline-success" type="button">View Answers</button>
    </form>
</nav>
</section>

<br><br>

    <div class="container">
        <h1>Reason : Level-1</h1>
        <h2>You are discouraged not to go previous page once you have pressed the next button</h2>

    </div>

    <br><br>

    <div class="container">
        <div class="col-md-12" style="border:1px solid;">
            <h5>NPS2a :</h5>
            <h6>What is the main reason for giving such score to your operator? Anything else? Anything else?
                <br>
                আপনার ব্যবহৃত অপারেটরকে আপনি__দিয়েছেন।দয়া করে বলুন, আপনার এই অপারেটর সম্বন্ধে অন্যকে পরামর্শ দেয়ার প্রধান কারনটি কি? আর কিছু? আর কিছু?(উত্তরদাতা প্রথমে যে কারণটি বলছেন তা প্রথম কলামে কোড করুন)।দুইবার প্রোব করুন। (উত্তরদাতা বাকি যে কারনগুলো বলেছেন তা পরের কলামে কোড করুন) </h6>
            <br>
        </div>
    </div>
    <br>
    <br>


<div class="container">
    <div class="col-md-10" style="border:1px solid;height: auto;">


        <div class="container">
 <form action="nps2b.php" method="post">
 <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Walk in Customer Care Centre Experience / কাস্টমার কেয়ার সেন্টারে সেবা  পাওয়ার অভিজ্ঞতা: </legend>
                        <div class="col-md-6">
                            <div class="form-check col-md-3" style="float: left;">
                                <input id="radio_01" class="form-check-input" type="radio" name="Brand_number_radio"  value="01" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    01
                                </label>
                            </div>
                            <div class="form-check col-md-3" id="cradio_01" style="display: false; float: left;">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]"  id="checkbox_01"  value="01" style="dislay:true">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   01
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </fieldset>
            
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Call Centre Experience/ কল সেন্টার থেকে সেবা পাওয়ার অভিজ্ঞতা : </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_02" value="02" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    02
                                </label>
                            </div>
                            <div id="cradio_02" class="form-check col-md-3" style="display: true; float: left;" >
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]"  id="checkbox_02"  value="02">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   02
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </fieldset>
           
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Price & Tariff / সেবার দাম ও কল রেট  :</legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_03" value="03" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    03
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_03">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_03" value="03">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   03
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
       
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Network & Connectivity Experience / নেটওয়ার্ক ব্যাবহারের অভিজ্ঞতা : </legend>
                        <div class="col-md-6">
                            <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_04" value="04" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    04
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_04">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_04" value="04">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   04
                                </label>
                            </div>
                         
                        </div>
                    </div>
                </fieldset>
      
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Purchase Process / কেনার অভিজ্ঞতা   </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_05" value="05" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    05
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_05">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_05" value="05">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   05
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
        
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Value Added Service (VAS)/ ভ্যালু আডেড সেবা (ভি এ এস) : </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_06" value="06" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    06
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_06">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_06" value="06">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   06
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
        
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Data/ Internet service/  ইন্টারনেট সেবা: </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_07" value="07" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    07
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_07">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_07" value="07">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   07
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
       
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Offer/  বিভিন্ন ধরনের অফার : </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_08" value="08" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    08
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_08">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_08" value="08">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   08
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
         
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Retail Outlet/বিক্রয়কেন্দ্রের অভিজ্ঞতা : </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_09" value="09" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    09
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_09">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_09" value="09">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   09
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
          
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Apps/এপস: </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_10" value="10" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    10
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_10">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_10" value="10">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   10
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
         
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Website/ওয়েবসাইট : </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_11" value="11" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    11
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_11">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_11" value="11">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   11
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
       
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Brand Reputation / ব্রান্ডের খ্যাতি    </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_12" value="12" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    12
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_12">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_12" value="12">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   12
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
          
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Communication and Promotion / প্রচার - প্রচারণা </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_13" value="13" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    13
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_13">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_13" value="13">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   13
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
        
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Recharge Process /  রিচার্জ/রিলোড পদ্ধতি   </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_14" value="14" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    14
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_14">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_14" value="14">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   14
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
            
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Hidden Charges / গোপন বা লুকানো চার্জ/খরচ </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_15" value="15" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    15
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_15">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_15" value="15">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   15
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
          
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Loyalty Program / অনেকদিন বা বেশি পরিমান বাবহারের জন্য দেয়া সুবিধা </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_16" value="16" onclick="check_radio()">
                                <label class="form-check-label" for="Brand_number_radio1">
                                    16
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_16">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_16" value="16" >
                                <label class="form-check-label" for="Brand_number_radio2">
                                   16
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
          
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Peer Group /একই অপারেটর ব্যবহারকারী আত্মীয়-স্বজন ও বন্ধুবান্ধব   </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_17" value="17" onclick="check_radio()" >
                                <label class="form-check-label" for="Brand_number_radio1">
                                    17
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_17">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_17" value="17">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   17
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
       
                <fieldset class="form-group">
                    <div class="row" style="margin-top: 40px;">
                        <legend class="col-form-label col-sm-6 pt-0">Spam SMS Spam SMS / স্প্যাম বার্তা/ অপ্রয়োজনীয় এসএমএস </legend>
                        <div class="col-md-6">
                             <div class="form-check col-md-3" style="float: left;">
                                <input class="form-check-input" type="radio" name="Brand_number_radio" id="radio_18" value="18" onclick="check_radio()" >
                                <label class="form-check-label" for="Brand_number_radio1">
                                    18
                                </label>
                            </div>
                            <div class="form-check col-md-3" style="display: true; float: left;" id="cradio_18">
                                <input class="form-check-input" type="checkbox" name="gBrand_number_radio[]" id="checkbox_18" value="18">
                                <label class="form-check-label" for="Brand_number_radio2">
                                   18
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </fieldset>
  


        </div>

    </div>
</div>

<br>

<div class="container" >
    <div class="form-group row float-right">
        <div class="col-sm-10">
            <button type="submit" name="xyz" class="btn btn-primary">Next Page</button>
        </div>
    </div>
</div>
<br>
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

</body>
</html>
<script type="text/javascript">
    function check_radio() {
        var chkYes = document.getElementById("radio_01");
        var dvPassport = document.getElementById("cradio_01");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("checkbox_01");   
        chkYes.checked ? dvchck.checked = false: checked = true;  

        var chkYes2 = document.getElementById("radio_02");
        var dvPassport2 = document.getElementById("cradio_02");
        var dvchck2 = document.getElementById("checkbox_02");
        dvPassport2.style.display = chkYes2.checked ? "none" : "block";
        chkYes2.checked ? dvchck2.checked = false:checked = true;  


        var chkYes3 = document.getElementById("radio_03");
        var dvPassport3 = document.getElementById("cradio_03");
        dvPassport3.style.display = chkYes3.checked ? "none" : "block";
        var dvchck3 = document.getElementById("checkbox_03");   
        chkYes3.checked ? dvchck3.checked = false: checked = true;  
        

        var chkYes4 = document.getElementById("radio_04");
        var dvPassport4 = document.getElementById("cradio_04");
        dvPassport4.style.display = chkYes4.checked ? "none" : "block";
        var dvchck4 = document.getElementById("checkbox_04");   
        chkYes4.checked ? dvchck4.checked = false: checked = true;  
        

         var chkYes5 = document.getElementById("radio_05");
        var dvPassport5 = document.getElementById("cradio_05");
        dvPassport5.style.display = chkYes5.checked ? "none" : "block";
        var dvchck5 = document.getElementById("checkbox_05");   
        chkYes5.checked ? dvchck5.checked = false: checked = true;  
        

        var chkYes6 = document.getElementById("radio_06");
        var dvPassport6 = document.getElementById("cradio_06");
        dvPassport6.style.display = chkYes6.checked ? "none" : "block";
        var dvchck6 = document.getElementById("checkbox_06");   
        chkYes6.checked ? dvchck6.checked = false: checked = true;  

         var chkYes7 = document.getElementById("radio_07");
        var dvPassport7 = document.getElementById("cradio_07");
        dvPassport7.style.display = chkYes7.checked ? "none" : "block";
        var dvchck7 = document.getElementById("checkbox_07");   
        chkYes7.checked ? dvchck7.checked = false: checked = true;  

        var chkYes8 = document.getElementById("radio_08");
        var dvPassport8 = document.getElementById("cradio_08");
        dvPassport8.style.display = chkYes8.checked ? "none" : "block";
        var dvchck8 = document.getElementById("checkbox_08");   
        chkYes8.checked ? dvchck8.checked = false: checked = true;  

         var chkYes9 = document.getElementById("radio_09");
        var dvPassport9 = document.getElementById("cradio_09");
        dvPassport9.style.display = chkYes9.checked ? "none" : "block";
        var dvchck9 = document.getElementById("checkbox_09");   
        chkYes9.checked ? dvchck9.checked = false: checked = true;  

        var chkYes10 = document.getElementById("radio_10");
        var dvPassport10 = document.getElementById("cradio_10");
        dvPassport10.style.display = chkYes10.checked ? "none" : "block";
        var dvchck10 = document.getElementById("checkbox_10");   
        chkYes10.checked ? dvchck10.checked = false: checked = true;  


         var chkYes11 = document.getElementById("radio_11");
        var dvPassport11 = document.getElementById("cradio_11");
        dvPassport11.style.display = chkYes11.checked ? "none" : "block";
        var dvchck11 = document.getElementById("checkbox_11");   
        chkYes11.checked ? dvchck11.checked = false: checked = true;  

        var chkYes12 = document.getElementById("radio_12");
        var dvPassport12 = document.getElementById("cradio_12");
        dvPassport12.style.display = chkYes12.checked ? "none" : "block";
        var dvchck12 = document.getElementById("checkbox_12");   
        chkYes12.checked ? dvchck12.checked = false: checked = true;  

         var chkYes13 = document.getElementById("radio_13");
        var dvPassport13 = document.getElementById("cradio_13");
        dvPassport13.style.display = chkYes13.checked ? "none" : "block";
        var dvchck13 = document.getElementById("checkbox_13");   
        chkYes13.checked ? dvchck13.checked = false: checked = true;  

        var chkYes14 = document.getElementById("radio_14");
        var dvPassport14 = document.getElementById("cradio_14");
        dvPassport14.style.display = chkYes14.checked ? "none" : "block";
        var dvchck14 = document.getElementById("checkbox_14");   
        chkYes14.checked ? dvchck14.checked = false: checked = true;  

         var chkYes15 = document.getElementById("radio_15");
        var dvPassport15 = document.getElementById("cradio_15");
        dvPassport15.style.display = chkYes15.checked ? "none" : "block";
        var dvchck15 = document.getElementById("checkbox_15");   
        chkYes15.checked ? dvchck15.checked = false: checked = true;  

        var chkYes16 = document.getElementById("radio_16");
        var dvPassport16 = document.getElementById("cradio_16");
        dvPassport16.style.display = chkYes16.checked ? "none" : "block";
        var dvchck16 = document.getElementById("checkbox_16");   
        chkYes16.checked ? dvchck16.checked = false: checked = true;  

         var chkYes17 = document.getElementById("radio_17");
        var dvPassport17 = document.getElementById("cradio_17");
        dvPassport17.style.display = chkYes17.checked ? "none" : "block";
        var dvchck17 = document.getElementById("checkbox_17");   
        chkYes17.checked ? dvchck17.checked = false: checked = true;  

        var chkYes18 = document.getElementById("radio_18");
        var dvPassport18 = document.getElementById("cradio_18");
        dvPassport18.style.display = chkYes18.checked ? "none" : "block";
        var dvchck18 = document.getElementById("checkbox_18");   
        chkYes18.checked ? dvchck18.checked = false: checked = true;  
    }
</script>