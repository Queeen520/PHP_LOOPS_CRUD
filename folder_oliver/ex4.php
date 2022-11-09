<!DOCTYPE html>

<?php 
#require 'index.php'?>

<html>
	<head>
		<title>
			exercises php day 3
		</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	
	<body>
		<!-- Header Menu of the Page -->
		

		<main>
			<!-- 
			Exercise 4
			Create a PHP program that iterates the integers from 1 to 100. 
			For multiples of three print "Back-End" instead of the number 
			and for the multiples of five print "Front-End". 
			For numbers that are multiples of both three and five print "Full-Stack".
			-->
			<section class="container" id="section-2">
				<div class="row">
					<div id="column1">
						<div class="column-title">
						<h2>Enter details</h2>
						</div>
						
						<?php
						function print_array($n=null){
						if (!$n)$n=100;
						for($i=1;$i<$n;$i++){
						if ($i%5==0 &&$i%3==0)echo "Full Stack<br>";
						else if($i%3==0)echo "Back-End<br>";
						else if($i%5==0)echo "Front-End<br>";
						else echo $i."<br>";
						}	
					}					
						?>					
						<form method="POST">
							<br>
							size of array:  &nbsp;&nbsp;&emsp;<input type="text" name="i1">
							
							
							<input type="submit" value="submit" />
							<br>
							
							<br>
						</form>
						<br>
						<?php $i1=$_POST['i1']??'';
							  #$i2=$_POST['i2']??'';
							  #$i3=$_POST['i3']??'';
						    echo"<br>";
							echo print_array($i1);
						?>
						
						
						
						
					</div>
				
		
					
		
				</div>
			</section>


			
		

		</main>



	</body>
</html>
