<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert record</title>
    <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>

</head>
<body>
<fieldset>
           <legend class='h2'>Add Product</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table'>
                   <tr>
                       <th>name</th>
                       <td><input class='form-control' type="text" name="name"  placeholder="Product Name" /></td>
                   </tr>   
                   <tr>
                       <th>price</th>
                       <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                   </tr>
                   <tr>
                       <th>description</th>
                       <td><input class='form-control' type="text" name="description" /></td>
                   </tr>
                   <tr>
                       <th>picture</th>
                       <td><input class='form-control' type="file" name="picture" /></td>
                   </tr>
                   
                   <tr>
                       <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                       <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>

</body>
</html>