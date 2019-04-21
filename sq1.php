<?php
        if(isset($_POST['submitbutton'])){
            $radio_button=$_POST['businesses_radio'];
            if($radio_button=='6'){
                $businesses_radio=$_POST['businesses_radio'];
               require 'db_qa.php';
               $aid=$businesses_radio;
               $qid="SQ1";
             dba_start($qid,$aid);

                echo "<script type='text/javascript'> location.href='sq2.php'</script>";
            }
            else{
                echo "<script type='text/javascript'> location.href='done.php'</script>";
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
            <div class="container">
                <div class="col-md-12">
                    <h1 >SCREENING QUESTION</h1>
                </div>
            </div>

            <br><br>

            <div class="container">
                <div class="col-md-12" style="border:1px solid;">
                    <p>
                    <h6>SQ1.
                    <br><br>
                    Do you or anyone in your family or close relatives work for any of the following types of businesses?  [SA]</h6>
                    <br>
                        আপনি বা আপনার পরিবারের কোনো সদস্য কি নিম্নোলিখিত কোন পেশার সাথে জড়িত? [একটি উত্তর]
                    </p>
                </div>
                <br>
                <br>
            </div>

            <div class="container">
                <div class="col-md-12" style="border:1px solid;height: auto;">
<form action="sq1.php" method="post">
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_advertising_agency" value="1" required>
                          <label class="form-check-label" for="businesses_radio1">
                            Advertising agency /  বিজ্ঞাপনী  সংস্তা
                          </label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_mrket_research_agency" value="2" required>
                          <label class="form-check-label" for="businesses_radio2">
                            Market research agency /বাজার গবেষণা  সংস্থা
                          </label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_public_relations" value="3" required>
                          <label class="form-check-label" for="businesses_radio3">
                            Public Relations/Promotions Agency /জনসংযোগ / প্রচারণা সংস্থা
                          </label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_mass_media" value="4" required>
                          <label class="form-check-label" for="businesses_radio4">
                            Mass Media (Newspapers, TV, Radio, Magazines, etc.) /গণমাধ্যম (খবরের কাগজ   / টেলিভিশন / রেডিও / ম্যাগাজিন)
                          </label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_telecommunications_including_manufacturer"
                                 value="5" required>
                          <label class="form-check-label" for="businesses_radio5">
                            Telecommunications including Manufacturer/Distributor/Retailer of Mobile /  টেলিযোগাযোগ (মোবাইল ফোন অথবা নেটওয়ার্ক অপারেটরদের সাথে জড়িত কোম্পানি/ ডিস্ট্রিবিউটর / খুচরা বিক্রেতা  )
                          </label>
                    </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="businesses_radio" id="radio_none_of_the_above"
                                 value="6" required>
                          <label class="form-check-label" for="businesses_radio6">
                            None of the above / উপরের কোনটিও না
                          </label>
                    </div>
                </div>

            </div>

        </div>
        <br><br>
        <!--nextbutton-->
        <div class="container">
            <div class="form-group row float-right">
                <div class="col-sm-10">
                    <button type="submit" name="submitbutton" class="btn btn-primary">Next Page</button>
                </div>
            </div>
        </div>
</form>

    

        <br>
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
</body>
</html>