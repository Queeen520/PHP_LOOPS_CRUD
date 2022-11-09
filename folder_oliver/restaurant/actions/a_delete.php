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
    <title>CRUD</title>
    <?php require_once "../components/boot.php";?>
</head>
<body>

<p>deleting...</p>
<?php 
$id=$_POST['id'];
$sql="delete from dishes where id=".$id;
echo $sql;
echo "<br>";
print_r($_POST);
print_r($_GET);
?>
<p>deleting...</p>
    
</body>
</html>