<?php
include ("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$University_email=$_POST['University_email'];
$Password=$_POST['Password'];

if(!empty($University_email)&& !empty($Password))
	{

    
		$query ="select* from student where University_email = '$University_email' limit 1";
		$result=mysqli_query($conn,$query);
		if($result){
       if ($result && mysqli_num_rows($result)>0) {
          $user_data=mysqli_fetch_assoc($result);
          if ($user_data['Password']==$Password) {
            $_SESSION['S_id']=$user_data['S_id'];
             header('location:../dashboard of student/dos.html');
	         die;
          }
       }

       
    }
        echo "Sign in unsuccessfull";
  }else
			{
				echo "Sign in unsuccessfull";
			}
	
}

?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In / Up</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="sg.css" />

    <script src="sg.js"></script>
  </head>
  <body>
    <h2>Sign in/up Form</h2>
    <div class="container" id="container">
      <!-- <div class="form-container sign-up-container"> -->
        <!-- <form action="#">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Sign Up</button>
        </form>
      </div> -->
      <div class="form-container sign-in-container">
        <form action="#" method="post">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" name="University_email"/>
          <input type="password" placeholder="Password"name="Password" />

          <!-- <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <select class="form-control" required>
                  <option value="" selected hidden>Sign in As</option>
                  <option>Owner</option>
                  <option>Student</option>
                </select>
                <span class="select-arrow"></span>
              </div>
            </div>
          </div> -->

          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <!-- <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div> -->
          <div class="overlay-panel overlay-right">
            <h1>Hello, Beautiful People!</h1>
            <p>Enter your personal details and enjoy your room.</p>

            <!-- <button class="ghost" id="signUp" >Sign Up As</button> -->
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
