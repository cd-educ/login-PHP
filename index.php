<?php

	session_start();

	if(isset($_SESSION["error"])){
		echo $_SESSION["error"];
	}

?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	<body>

		<div class="login-page">
		  <div class="form">
			<!--
		    <form class="register-form">
		      <input type="text" placeholder="name"/>
		      <input type="password" placeholder="password"/>
		      <input type="text" placeholder="email address"/>
		      <button>create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    </form>-->
		    <form method="POST" action="login.php" class="login-form">
		      <input type="text" name="username" placeholder="username"/>
		      <input type="password" name="password" placeholder="password"/>
			  <button type="submit">login</button>
		      <!--<p class="message">Not registered? <a href="#">Create an account</a></p>-->
		    </form>
		  </div>
		</div>

	</body>

</html>