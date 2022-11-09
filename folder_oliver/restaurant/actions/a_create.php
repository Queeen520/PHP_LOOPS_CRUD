<?php
require_once "db_connect.php";
# get number of rows in table
$sql = "SELECT * from dishes";
$message="query: ".$sql.".";
if ($result = mysqli_query($conn, $sql)) {
    $nr_rows=mysqli_num_rows($result);
    $message = $message." ".$nr_rows." rows in table.";
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert record</title>
</head>
<body>
<div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
                <?php print_r($_POST)?>
             <br>
                <?php print_r($_FILES)?>
            <?php
            $name=$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $img_path=$_FILES['picture']['full_path'];
            echo "<br>";
            echo $name."<br>";
            echo $price."<br>";
            echo $description."<br>";
            echo $img_path."<br>";
        $sql="insert into dishes (name, price, description, image) values ('".$name."','".$price."','".$description."','".$img_path."')";
        echo "query: ".$sql;
        # insert data into database
        $result = mysqli_query($conn, $sql);
        var_dump_pretty($result);



            ?>

           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p></p>
               <p></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>

</body>
</html>