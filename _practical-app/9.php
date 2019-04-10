<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		/*  Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
		*/
		
		// GET.
		if (isset($_GET["param"])) {
			print_r($_GET);
		}
		
		// COOKIE.
		$name = "first_cookie";
		$value = 500;
		$duration = time() + (60*60*24*7);
		setcookie($name, $value, $duration);
		
		if (isset($_COOKIE["first_cookie"])) {
			echo $_COOKIE["first_cookie"] . "<br>";
		}
		
		// SESSION.
		session_start();
		$_SESSION["hello"] = "Hello world";

		if (isset($_SESSION["hello"])) {
			echo $_SESSION["hello"];
		}
		?>
		
		<a href="9.php?param=10">Click Here</a>

	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php" ?>