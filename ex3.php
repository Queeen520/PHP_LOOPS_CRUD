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
			Exercise 3

			Create a function that will have a parameter. 
			The argument given to that parameter should be an array. 
			The function should return the highest value from the array. 
			Try to create an array with at least 10 numbers created randomly. 
			You may want to take a look at the rand() function from PHP.
			-->
			<section class="container" id="section-2">
				<div class="row">
					<div id="column1">
						<div class="column-title">
						<h2>Enter details</h2>
						</div>
						
						<?php
						function print_array($n=null){
						if (!$n)$n=10;
						# create random number array
						$ar=[];
						for($i=0;$i<$n;$i++){
							array_push($ar, rand());
						}
						#print_r($ar);
						
						
						foreach($ar as $val)
						echo $val."<br>";
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
