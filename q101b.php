<?php
    require 'db_qa.php';
    $operator_list_array = $_SESSION['operator_list_array'];
    $operator_count = count($operator_list_array);
    $r2_operator = $_SESSION['operator_name'];

    if (isset($_POST['q101b_btn'])) {
        if ($operator_count < 3) {
            if ($operator_count == 2) {
                if ($operator_list_array[0] == $r2_operator) {
                    $_SESSION['second_operator'] = $operator_list_array[1];
                } else {
                    $_SESSION['second_operator'] = $operator_list_array[0];
                }

                $_SESSION['top_one'] = $operator_list_array[0];
                $_SESSION['top_two'] = $operator_list_array[1];

                //db insert
                for($i=0;$i<$operator_count;$i++) {
                    $qid= "Q101b".$operator_list_array[$i];
                    $aid = $_POST['connection'.$i];
                    // echo $qid."<br>".$aid;
                    dba_start($qid,$aid);
                }
                //echo $_SESSION['top_two'] . $_SESSION['top_one'];
            } else {
                $_SESSION['top_one'] = $operator_list_array[0];
                $_SESSION['top_two'] = "";
                //db insert
                for($i=0;$i<$operator_count;$i++) {
                    $qid= "Q101b".$operator_list_array[$i];
                    $aid = $_POST['connection'.$i];
                    // echo $qid."<br>".$aid;
                    dba_start($qid,$aid);
                }
                //echo $_SESSION['top_two'] . $_SESSION['top_one'];
            }
            //die;
            echo "<script type='text/javascript'> location.href='q101c.php'</script>";
        } else {
            switch ($operator_count) {
                case 3:
                    $brand1 = (int)$_POST['connection0'];
                    $brand2 = (int)$_POST['connection1'];
                    $brand3 = (int)$_POST['connection2'];
                    
                    $operator1 = $operator_list_array[0];
                    $operator2 = $operator_list_array[1];
                    $operator3 = $operator_list_array[2];

                    if(!(($brand1==$brand2)||($brand1==$brand3)||($brand2==$brand3))) {

                        $brandListArray = [$brand1 =>$operator1, $brand2=>$operator2, $brand3=>$operator3];
                        $brandArray = [$brand1,$brand2,$brand3];

                        rsort($brandArray);

                        $first = (string)$brandArray[0];
                        $second = (string)$brandArray[1];
                        $third = (string)$brandArray[2];


                        $op1 = $brandListArray[$first];
                        $op2 = $brandListArray[$second];
                        $op3 = $brandListArray[$third];
                        $_SESSION['top_one'] = $op1;
                        $_SESSION['top_two'] = $op2;

                        //db insert
                        for($i=0;$i<$operator_count;$i++) {
                            $qid= "Q101b".$operator_list_array[$i];
                            $aid = $_POST['connection'.$i];
                            // echo $qid."<br>".$aid;
                            dba_start($qid,$aid);
                        }

                        if ($op1 == $r2_operator) {
                            $_SESSION['second_operator'] = $op2;
                        } else {
                            $_SESSION['second_operator'] = $op1;
                        }


                        if ($r2_operator == $op3) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else {
                            echo "<script type='text/javascript'> location.href='q101c.php'</script>";
                        }
                    }
                    else{
                        echo "<script> alert('amount cannot be same')</script>";
                    }
                    break;
                case 4:

                    //Amount of mobile balance
                    $brand1 = $_POST['connection0'];
                    $brand2 = $_POST['connection1'];
                    $brand3 = $_POST['connection2'];
                    $brand4 = $_POST['connection3'];

                    //operator Names
                    $operator1 = $operator_list_array[0];
                    $operator2 = $operator_list_array[1];
                    $operator3 = $operator_list_array[2];
                    $operator4 = $operator_list_array[3];

                    $brandListArray = [$brand1 =>$operator1, $brand2=>$operator2,
                     $brand3=>$operator3, $brand4=> $operator4];
                    $brandArray = [$brand1,$brand2,$brand3,$brand4];

                    rsort($brandArray);

                    $first = (string)$brandArray[0];
                    $second = (string)$brandArray[1];
                    $third = (string)$brandArray[2];
                    $fourth = (string)$brandArray[3];
               
                    if(!(($brand1==$brand2)||($brand1==$brand3)||($brand2==$brand3)||($brand1==$brand4)||($brand2==$brand4)||($brand3==$brand4))) {


                        $op1 = $brandListArray[$first];
                        $op2 = $brandListArray[$second];
                        $op3 = $brandListArray[$third];
                        $op4 = $brandListArray[$fourth];
                        $_SESSION['top_one'] = $op1;
                        $_SESSION['top_two'] = $op2;
                        if ($op1 == $r2_operator) {
                            $_SESSION['second_operator'] = $op2;
                        } else {
                            $_SESSION['second_operator'] = $op1;
                        }

                        //db insert
                        for($i=0;$i<$operator_count;$i++) {
                            $qid= "Q101b".$operator_list_array[$i];
                            $aid = $_POST['connection'.$i];
                            // echo $qid."<br>".$aid;
                            dba_start($qid,$aid);
                        }

                        if ($r2_operator == $op3) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else if ($r2_operator == $op4) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else {
                            echo "<script type='text/javascript'> location.href='q101c.php'</script>";
                        }
                    }
                    else{
                        echo "<script> alert('amount cannot be same')</script>";
                    }
                    break;
                
                case 5:

                    //Amount of mobile balance
                    $brand1 = $_POST['connection0'];
                    $brand2 = $_POST['connection1'];
                    $brand3 = $_POST['connection2'];
                    $brand4 = $_POST['connection3'];
                    $brand5 = $_POST['connection4'];

                    //operator Names
                    $operator1 = $operator_list_array[0];
                    $operator2 = $operator_list_array[1];
                    $operator3 = $operator_list_array[2];
                    $operator4 = $operator_list_array[3];
                    $operator5 = $operator_list_array[4];
                    if(!(($brand1==$brand2)||($brand1==$brand3)||($brand2==$brand3)||($brand1==$brand4)||($brand2==$brand4)||($brand3==$brand4)||($brand1==$brand5)||($brand2==$brand5)||($brand3==$brand5)||($brand4==$brand5))) {
                    

                        $brandListArray = [$brand1 =>$operator1, $brand2=>$operator2,
                            $brand3=>$operator3, $brand4=> $operator4, $brand5 => $operator5];
                        $brandArray = [$brand1,$brand2,$brand3,$brand4,$brand5];

                        rsort($brandArray);

                        $first = (string)$brandArray[0];
                        $second = (string)$brandArray[1];
                        $third = (string)$brandArray[2];
                        $fourth = (string)$brandArray[3];
                        $fifth = (string)$brandArray[4];


                        $op1 = $brandListArray[$first];
                        $op2 = $brandListArray[$second];
                        $op3 = $brandListArray[$third];
                        $op4 = $brandListArray[$fourth];
                        $op5 = $brandListArray[$fifth];
                        $_SESSION['top_one'] = $op1;
                        $_SESSION['top_two'] = $op2;
                        if ($op1 == $r2_operator) {
                            $_SESSION['second_operator'] = $op2;
                        } else {
                            $_SESSION['second_operator'] = $op1;
                        }

                        //db insert
                        for($i=0;$i<$operator_count;$i++) {
                            $qid= "Q101b".$operator_list_array[$i];
                            $aid = $_POST['connection'.$i];
                            // echo $qid."<br>".$aid;
                            dba_start($qid,$aid);
                        }

                        if ($r2_operator == $op3) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else if ($r2_operator == $op4) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else if ($r2_operator == $op5) {
                            echo "<script type='text/javascript'> location.href='done.php'</script>";
                        } else {
                            echo "<script type='text/javascript'> location.href='q101c.php'</script>";
                        }
                    }
                    else{
                        echo "<script> alert('amount cannot be same')</script>";
                    }
                    break;
            }

        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Neilsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
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

    <h1>Q101b</h1>

</div>

<br><br>

<div class="container">
    <div class="col-md-12" style="border:1px solid;">
        <h5>Q101b :</h5>
            <h6>What is your average monthly expenditure behind these connections?
                <br>[Instruction: if R2 is not among the top 2 connections considering expenditure, TERMINATE ]
                <br><br>এই সংযোগের/ সংযোগগুলোর পিছনে আপনি মাসে কিরকম/ কত টাকা খরচ করেন? </h6>
            <br>
    </div>
</div>
<br>
<br>


<div class="container">
    <div class="col-md-12" style="border:1px solid;height: auto;">


        <div class="container">
            <?php
                for($i = 0; $i<$operator_count; $i++) {

                    echo "<form action='q101b.php' method='post'>
                            <fieldset class='form-group'>
                                <div class='row' style='margin-top: 40px;'>
                                    <legend class='col-form-label col-sm-2 pt-'>".$operator_list_array[$i].":</legend>
                                    <div class='col-md-10'>
                                        <div class='col-sm-10'>
                                            <input type='number' class='form-control' id='connection1' name='connection".$i."'
                                                   placeholder='Monthly Expenditure' required>
                                        </div>
            
                                    </div>
                                </div>
                            </fieldset>";
                           }
                           echo "
                           
        </div>

    </div>
</div>

<br>";
                           echo "<div class='container' >
                                <div class='form-group row float-right'>
                                    <div class='col-sm-10'>
                                        <button type='submit' name='q101b_btn' class='btn btn-primary'>Next Page</button>
                                    </div>
                                </div>
                            </div>
                           </form>";

            ?>


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


































