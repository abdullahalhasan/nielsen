<?php require 'db_qa.php';
    $operator_name=$_SESSION['operator_name'];  
    $qid="Q101a";
if (isset($_POST['q101a_btn'])) {//to run PHP script on submit
    $aid=$_POST['Operator_radio'];
    if (!empty($aid)) {

        $answerId=arr_concate($aid);
        dba_start($qid,$answerId);
        foreach ($aid as $selected) {
            // Loop to store and display values of individual checked checkbox
           $aid=$selected;
        
            $operator_list_array[] = $aid;
        }
        $_SESSION['operator_list_array'] = $operator_list_array;
        $total_op = count($operator_list_array);
        if ($total_op == 1) {
            $_SESSION['op_flag'] = 1;
        } else{
            $_SESSION['op_flag'] = $total_op;
        }
        echo "<script type='text/javascript'> location.href='q101b.php'</script>";
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
        <section>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Nielsen Questionnaire</a>
            <form class="form-inline">
                <button class="btn btn-outline-success" type="button">View Answers</button>
            </form>
        </nav>
        </section>

        <br>
        <div class="container">
            <div class="panel-heading col-md-12">
                <h2 class="panel-title">Q101a </h2>
            </div>
        </div>


        <br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                <p>
                    <h6>Q101a
                        <br><br>
                        Currently which operator’s services are you availing?
                        <br><br> আপনি বর্তমানে কোন কোন অপারেটরের সিম ব্যাবহার করছেন?
                    </h6>

                </p>
            </div>
            <br>
            <br>
        </div>

<form action="q101a.php" method="post" >
              <div class="container">
                <div class="col-md-12" style="border:1px solid;height: auto;">
            

                  <div class="col-md-12" aria-required="true">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="Operator_radio[]" id="GP" value="GP" >
                      <label class="form-check-label" for="Operator_radio1">
                        GP
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="Operator_radio[]" id="BL" value="BL" >
                      <label class="form-check-label" for="Operator_radio2">
                        BL
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="Operator_radio[]" id="Robi" value="Robi" >
                      <label class="form-check-label" for="Operator_radio3">
                        Robi
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="Operator_radio[]" id="Airtel" value="Airtel" >
                      <label class="form-check-label" for="Operator_radio4">
                        Airtel
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="Operator_radio[]" id="TT" value="TT" >
                      <label class="form-check-label" for="Operator_radio5">
                        TT
                      </label>
                    </div>
                  </div>
                </div>
              </div>

        <br>

        <div class="container" >
            <div class="form-group row float-right">
                <div class="col-sm-10">
                    <button type="submit" name="q101a_btn" class="btn btn-primary">Next Page</button>
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
                    <a href="#"> Nielsen.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>
</body>
</html>
<script>
var op_name = "<?php echo $operator_name; ?>";
    var y=document.getElementById(op_name);
    y.checked=true;
</script>