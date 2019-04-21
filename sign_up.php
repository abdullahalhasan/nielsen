<?php
if (isset($_POST["signup_button"])) {
    # code...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $password = $_POST["password"];
  $cPassword = $_POST["cpassword"];
  if($password==$cPassword){
  require_once 'signup_db.php';  
  dba_sign($name,$password);
}
else{
    echo"Password didnot matched";
    }
 }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Neilsen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
        <section>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Neilsen Questionnaire</a>     
        </nav>
        </section>
<body>

    <script type="text/javascript">

var check = function() {
if (document.getElementById('password').value ==
document.getElementById('cpassword').value) {
document.getElementById('message').style.color = 'green';
document.getElementById('message').innerHTML = 'matching';
} else {
document.getElementById('message').style.color = 'red';
document.getElementById('message').innerHTML = 'not matching';
}
}
</script>




    <div class="container">
    <div>
    <h2>Create New ID </h2>
    </div>
        <div>
      
            <div class="container">
		<form action="sign_up.php" method="post">
			<div class="form-group">
			    <label for="name">User Id</label>
			    <input type="text" class="form-control" id="name" aria-describedby="namehelp" name="name" placeholder="Enter name" required>
		    </div>
		 
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="password" name="password" onkeyup='check();' placeholder="Password"required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputConfirmPassword1">Confirm Password</label>
		    <input type="password" name="cpassword" class="form-control" id="cpassword" onkeyup='check();' placeholder="Confirm Password" required>
		    <span id='message'></span>
          </div>

          <div class="col-md-3">
		  <button type="submit" name="signup_button"  id="button" class="btn btn-primary">Register</button>
		</div>
        
        </form>
	</div>
    
    </div>
    <section>
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="#"> nielsen.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </section>
</body>
</html>