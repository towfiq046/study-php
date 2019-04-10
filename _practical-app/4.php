<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->

	<article class="main-content col-xs-8">

		<?php

		/*  Step 1: Define a function and make it return a calculation of 2 numbers

			Step 2: Make a function that passes parameters and call it using parameter values

 		*/
		function cal() {
			$sum = 20 + 20;
			return $sum;
		}

		function param($a, $b) {
			$sum = $a + $b;
			return $sum;
		}

		echo cal();
		echo "<br>";
		echo param(10, 10);
 
		?>





	</article>
	<!--MAIN CONTENT-->


	<?php include "includes/footer.php" ?>