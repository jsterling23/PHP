<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php

// $number1 = 10;
// $number2 = 20;
// $result = $number1 + $number2;

$array = ['jerry','padilla'];
$assArray2 = [ 0 => 'Jerry', 1 => 'Padilla'];
// $testArray = [ 0 => 'Jerry', 1 => 'Padilla'];
echo '<h1>' . $assArray2[0] . ' ' . $assArray2[1] . '</h1>' . '<br>';
echo $array[0] . ' ' . $array[1];
// echo $testArray;
// echo $array[2];

// print_r($array);
// echo '<br>';
// // print_r($array2);
// echo "Array 2 is " . $array2[2];
// echo '<br>';
// print('result is ' . $result);
// echo '<br>';
// echo $number1 . " + " . $number2 . " = " . $result;
 

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>