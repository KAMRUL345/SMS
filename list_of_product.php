<?php
require('connection.php');
// require_once('menu.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of Product</title>
</head>
<body>
    
<?php
require_once('menu.php');
?>
<h2>Product List Page</h2>
    <?php
        $sql = "SELECT * FROM product";

        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);
        // echo $data['category_name'];

        echo "<table border = '1'><tr><th>Product Name</th><th>Product Category</th><th>Entry Date</th><th>Action</th>";

        while($data = mysqli_fetch_assoc($query)){

            $product_id = $data['product_id'];
            $product_name = $data['product_name'];
            $product_entry_date = $data['product_entry_date'];
            echo "<tr>
                <td>$product_name</td>
                <td>$product_name</td>
                <td>$product_entry_date</td>
                <td><a href='edit_product.php?id=$product_id'>Edit</a></td>
                </tr>";
        }
        echo "</tr></table>"


    ?>


    
</body>
</html>