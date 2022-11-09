<?php 
/* Create a function that will have a parameter. 
The argument given to that parameter should be an array. 
The function should return the highest value from the array. 
Try to create an array with at least 10 numbers created randomly. 
You may want to take a look at the rand() function from PHP. */

$numbers = array();

function rand_num_generator() {
return rand(1000,9999);
}
for($i=0;$i<10;$i++) {
$number[$i] = rand_num_generator();
echo $number[$i].'<br>';
}

$largest = max($number);
echo '<br>'.$largest;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>