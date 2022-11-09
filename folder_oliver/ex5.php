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
			Challenge
			
			We will create a Restaurant Database (you can create it directly in php MyAdmin).

			The database should contain one table called dishes with columns dishID, image (URL link), 
			name, price and meal description. If there are any columns that you think could compliment 
			your project feel free to expand. 

			You should be able to:
			Display all meals. This page will show name, image and a "Show details" link for all meals 
			in the database.
			Each meal will be linked to a details page specific for that meal (try to pass the id using GET request). 
			From that id, show all the details to the specific meal included on your database.
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
