<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="./stylesheets/custom.css">
	
</head>
<body>

<div class="container" id="container">
<div class="sform-container signup-container">

<form method = "post" action = "#">
	<h1>Create Account</h1>
	
	<span> </span>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<button> Register </button>
</form>
</div>
<div class="sform-container signin-container">

	<form method = "post" action = "#">
		<h1>Log In</h1>
		
	<span>  </span>
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">

	<button>Log In</button>
	</form>
</div>
<div class="overlay_container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h3>Welcome Back!</h3>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Log In </button>
		</div>
		<div class="overlay-panel overlay-right">
			<h3>Hello, Friend!</h3>
			<p> Don't have an account? Register now </p>
			<button class="ghost" id="signUp"> Register </button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>








