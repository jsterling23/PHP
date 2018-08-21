<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

$condition = 9;

if($condition == 3){

	echo "Non sense ";

} elseif($condition == 3){
	echo "okay one more";
} else {
	echo " I love php <br>";
}

for($c = 0; $c <= 10; $c++){
	echo $c . '<br>';
}


$number = 4;
switch($number){
	case 1:
	echo "this is 1";
	break;
	case 2:
	echo "this is 2";
	break;
	case 3:
	echo "this is 3";
	break;
	case 4:
	echo "this is 4";
	break;
	case 5:
	echo "this is 5";
	break;
	
	default:
	echo "didn't find the correct solution";
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>