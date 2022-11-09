<?php 
//Create a for loop which will print your name 50 times on the screen. 
//Do the same with while and do while loop. 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .parent {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 20cm;
        }
        .item { 
            display: flex;
            border: 2px solid black;
            width: 5cm;
        }
    </style>
</head>
<body>

<div class="parent">

<div class="item">
    <?php 
    $a = "Isabella";

    for ($i=0; $i < 50; $i++) {
        echo "$a <br>";
    }
    ?>
</div>
<div class="item">
<?php 
    $a = "Isabella";
    $i = 0;

    while ($i < 50) {
        $i ++;
        echo "$a <br>";
    }
    ?>
</div>
<div class="item">
<?php 
    $a = "Isabella";
    $i = 0;


    ?>
</div>

</div>

</body>
</html>