<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
		


		<?php  

		$greeting = "fail";
		$finalNumber = 10;
		$number = 0;


		// greeting two
		echo "<h1>Hello from inside PHP</h1>";

		echo "Needed to use this space for a switch statement... <br>";

		switch($greeting){
			case 'what':
			echo "this is the greeting";
			break;
			case 'who':
			echo "this is the greeting";
			break;
			case 'Hello':
			echo "this is the right greeting";
			break;
			case 'blah':
			echo "this is the greeting";
			break;

			default:
			echo "We couldnt find the greeting...";

		}

		echo "<br><br><br><br>";

		while($number < $finalNumber){
			$number += 1;
			print('loop' . $number . '<br>');		
		}

		echo "<br><br><br><br>";
		

		for($c = 0; $c <= 100; $c++){
			echo 'Count = ' . $c . '<br>';
		}

		$arrayLoop = [2,4,6,8,10];
		foreach($arrayLoop as $var){
			echo $var . '<br>';
		}






		/* 
		   Step 1:  Use the Echo Function to say hello with html h1                  tags embedded inside php.


		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.


		   */

		?>
		<!-- this is demonstrating the echo function greeting -->
		<h1><?php echo $greeting; ?></h1>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>