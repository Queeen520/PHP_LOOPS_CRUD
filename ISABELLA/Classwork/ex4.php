<?php 
//Create a PHP program that iterates the integers from 1 to 100. 
//For multiples of three print "Back-End" instead of the number 
//and for the multiples of five print "Front-End". 
//For numbers that are multiples of both three and five print "Full-Stack".
for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo 'Full-Stack<br>';
    } else if ($i % 5 == 0) {
        echo 'Back-End<br>';
    } else if ($i % 3 == 0) {
        echo 'Front-End<br>';
    } else {
        echo $i.'<br>';
    }
}
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