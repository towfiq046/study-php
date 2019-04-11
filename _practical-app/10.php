<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 3: Make a method named ShowAll that echos all the properties

		Step 4: Instantiate the class / create object and call it pitbull

		Step 5: Call the method ShowAll
	*/

	class Cat {
		var $eye = 2;
		var $color = "White";
		var $nose = 1;

		function show_all() {
			echo $this->eye . "<br>", $this->color . "<br>", $this->nose;
		}
	}

	$tom = new Cat();
	$tom->show_all();
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>