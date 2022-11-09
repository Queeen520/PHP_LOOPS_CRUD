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
			Exercise 2
			Define a numeric array with 10 elements. 
			Use a foreach loop to output the value of every array's element.
			-->
			<section class="container" id="section-2">
				<div class="row">
					<div id="column1">
						<div class="column-title">
						<h2>Enter details</h2>
						</div>
						
						<?php
						function print_array($ar=null){
						if(!$ar){
							$ar=['john', 'jack','sarah','frodo','chuck','lisa','jet','shark','fin','jester'];
							echo "print predefined array: <br><br>";
						}
						else if (is_string($ar)){
							$ar= explode(',', $ar);
							echo "print input array:<br><br>";
							
						}
							else return;
						
						foreach($ar as $val)
						echo $val."<br>";
						}						
						?>					
						<form method="POST">
							<br>
							name:  &nbsp;&nbsp;&emsp;<input type="text" name="i1">
							
							
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
