<?php
    session_start();
    session_unset();
    
    if (isset($_POST['start_btn'])) {
        echo "<script type='text/javascript'> location.href='record.php'</script>";
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

            <h1>Greetings!! </h1>

        </div>

        <br><br>

        <div class="container">
            <div class="col-md-12" style="border:1px solid;">
                    <p>
                        <h6>Good morning/afternoon/evening Mr/Ms My name is ____________ from Nielsen, a leading market research company. We are conducting a research on mobile phone users, and we would like to interview you. This interview will take 8 – 10 minutes. We hope you are willing to spare your time for this interview.
                    IF THE RESPONDENT AGREES, SAY THANK YOU, AND CONTINUE TO THE QUESTIONS BELOW.
                    IF THE RESPONDENT ANSWERS NO, I AM BUSY. MAY I GET BACK TO YOU AT A DIFFERENT TIME? WOULD YOU BE AVAILABLE? IF THE RESPONDENT STICTLY ANSWERS NO, STOP THE INTERVIEW.
                    <br><br>
                    শুভ সকাল/ দুপুর/ বিকেল, আমি - - - - - - - নিয়েলসেন নামের একটি বাজার গবেষণা সংস্থা থেকে বলছি। আমাদের একটি গবেষণার জন্য আপনার ইন্টারভিউ দরকার। আপনি যদি রাজি থাকেন এবং আপনার হাতে ৮-১০ মিনিট সময় থাকে তাহলে আপনাকে এই গবেষণায় অংশ নেবার জন্য অনুরোধ করছি।
                    যদি উত্তরদাতা হ্যা বলেন তাহলে ধন্যবাদ বলে নিচের প্রশ্নগুলো জিজ্ঞেস করুন. যদি উত্তরদাতা বলেন না, আমি এখন ব্যস্ত তাহলে জিজ্ঞেস করুন, আমি কি অন্য সময় ফোন করব? বা আপনার অবসর কখন হবে? যদি উত্তরদাতা খুব কঠোরভাবে না বলেন তাহলে সাক্ষাত্কার সেখানেই বন্ধ করুন।
                </h6>
                        <br>
                    </p>
            </div>

        </div>
        <br><br><br>
        <form action="index.php" method="post">
            <div class="container">
                <div class="col-md-12">
                    <button type="submit" name="start_btn" style="float: right" class="btn btn-primary">Start</button>
                </div>
            </div>
        </form>
        <br><br><br>

        <section>
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="http://www.nielsen.com" target="_blank"> nielsen.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>
    </body>
</html>