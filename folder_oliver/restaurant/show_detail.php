<?php
require_once "./actions/db_connect.php";

$requestType = $_SERVER['REQUEST_METHOD'];
$message= "$requestType request received.";

$id=$_GET['id'];


$sql = "SELECT * from dishes where id=$id";
$message = $message." executing query: ".$sql.".";
$result = mysqli_query($conn, $sql);
$tbody = "";

if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
        <tr>
           <td><img class='img-thumbnail' src='images/" . $row['image'] . "'</td>
           <td>" . $row['name'] . "</td>
           <td>" . $row['price'] . "</td>
           <td>" . $row['description'] . "</td>
           
           <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
           
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

<body class="d-flex flex-column min-vh-100">
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>
            <a href="index.php"><button class='btn btn-primary' type="button">Home</button></a>
        </div>
        <p class='h2'>Products</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>
   
    
<footer class="bg-light text-center text-lg-start mt-auto">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <?php echo $message ?>
    
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>