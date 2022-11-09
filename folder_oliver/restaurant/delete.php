<?php
require_once "./actions/db_connect.php";
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
    <title>delete entry</title>
    <?php require_once "components/boot.php";?>
    <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
</head>
<body>
<fieldset>
    <?php 
    print_r($_POST);
    print_r($_GET);
    print_r($conn);

    $id=$_GET['id'];
    $sql="select * from dishes where id=".$id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row =  mysqli_fetch_assoc($result)) {
            $name=$row['name'];
            $image=$row['image'];
            $tbody = "
            <tr>
                <td><img class='img-thumbnail' src='images/" . $row['image'] . "'</td>
                <td>" . $row['name'] . "</td>
                
            </tr>
             ";
        }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}
    
    ?>
           <legend class='h2 mb-3'>Delete request </legend>
           <!-- <img class='img-thumbnail rounded-circle' src='images/<?php echo $image ?>' alt="<?php echo $name ?>"></legend> -->
           <h5>You have selected the data below:</h5>
           <table class="table w-75 mt-3">
               <tr>
                   <td><?php echo $tbody;?></td>
               </tr>
           </table>

           <h3 class="mb-4">Do you really want to delete this product?</h3>
           <form action ="actions/a_delete.php" method="post">
               <input type="hidden" name="id" value=<?php echo $id; ?> />
              
               <input type="hidden" name="picture" value="" />
               <button class="btn btn-danger" type="submit">Yes, delete it!</button>
               <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
           </form>
       </fieldset>

</body>
</html>