
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./stylesheets/custom.css">

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
          <form action="" onsubmit="return false;">
            <h2>Create an account</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="email_id" name="" placeholder="Email Address" />
            <input type="password" name="" placeholder="Create Password" />
            <input type="password" name="" placeholder="Confirm Password" />
            <input type="submit" name="" value="Sign Up" />
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








