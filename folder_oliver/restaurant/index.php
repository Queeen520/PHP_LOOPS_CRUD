<?php
require_once "./actions/db_connect.php";
# get number of rows in table
$sql = "SELECT * from dishes";
$message="query: ".$sql.".";
if ($result = mysqli_query($conn, $sql)) {
    $nr_rows=mysqli_num_rows($result);
    $message = $message." ".$nr_rows." rows in table.";
}



/* if ($result = mysqli_query($conn, $sql)) {
    $rowcount = mysqli_num_rows( $result );
    printf("Total rows in this table :  %d\n", $rowcount);
 } */

else
    $message = "no rows in table dishes.";
 

$sql = "SELECT * from dishes";
$result = mysqli_query($conn, $sql);
$tbody = "";
#var_dump_pretty($result);
// $row = mysqli_fetch_assoc($result);
// var_dump_pretty($row);#
if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
<tr>
            <td><img class='img-thumbnail' src='images/" . $row['image'] . "'</td>
           <td>" . $row['name'] . "</td>
           <td>" . $row['price'] . "</td>
           
           <td class='text-center'><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
           <a href='show_detail.php?id=" . $row['id'] . "'><button class='btn btn-info btn-sm' type='button'>show details</button></a></td>
            </tr>
";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php";
    ?>
    <style type="text/css">
    .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>

    <title>CRUD</title>
</head>

<body>
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div>
        <p class='h2'>Products</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <?php echo $message ?>
        </div>
    </footer>
</body>

</html>