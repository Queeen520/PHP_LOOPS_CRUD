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
			Exercise 1
            Create a for loop which will print your name 50 times on the screen. 
            Do the same with while and do while loop. 
			-->
			<section class="container" id="section-2">
				<div class="row">
					<div id="column1">
						<div class="column-title">
						<h2>Enter details</h2>
						</div>
						
						<?php
						function print_name($name){
						echo "for loop <br><br>";
                        for($i=0;$i<50;$i++){
                            echo $name."<br>";}
						echo "<br><br>while loop <br><br>";
                        $i=0;
                        while($i<50){
                                echo $name."<br>";
                                $i++;
                            }
                        echo "<br><br>do while loop<br><br>";
                        $i=0;
                        do {
                                echo $name."<br>";
                                $i++;
                            }while($i<50);
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
							echo print_name($i1);
						?>
						
						
						
						
					</div>
				
		
					
		
				</div>
			</section>


			
		

		</main>



	</body>
</html>
