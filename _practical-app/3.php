<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

		if (3 < 2) {
			echo ("I");
		} elseif (2 > 4) { } else {
			echo ("I love PHP");
		}

		echo ("<br>");

		for ($i = 1; $i < 11; $i++) {
			echo ($i . "<br>");
		}

		switch (5) {
			case 11:
				echo ("1");
				break;
			case 21:
				echo ('2');
			case 31:
				echo ("3");
				break;
			case 4:
				echo ('4');
			case 5:
				echo ("5");
				break;
			default:
				echo ("Default");
		}

		?>


	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php" ?>