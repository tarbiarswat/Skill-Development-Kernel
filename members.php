<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./stylesheets/custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SignUp and Login</title>

</head>
<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="./images/1.jpg" alt="" /></div>
        <div class="formBx">
          <form action="code.php" method="POST" >
            <h2>Sign In</h2>
            <input type="text" name="email_id" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="login_btn" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="code.php" method="post" >
            <h2>Create an account</h2>
            <input type="text" name="fname" required="" placeholder="First Name" />
            <input type="text" name="lname" required="" placeholder="Last Name" />
            <input type="email_id" name="email_id" required="" placeholder="Email Address" />
            <input type="password" name="password" required="" placeholder="Password" />
            


            
            <input type="submit" name="registerbtn" value="Sign Up" />
            <p class="signup">
            
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="./images/1.jpg" alt="" /></div>
      </div>
    </div>
  </section>
</body>
<script>
	const toggleForm = () => {
	const container = document.querySelector('.container');
	container.classList.toggle('active');
	};

</script>
</html>








