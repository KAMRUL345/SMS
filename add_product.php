<?php
require('connection.php');
// require_once('menu.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
<?php
require_once('menu.php');
?>
<h2>Product Entry Page</h2>
    <?php
        // echo $_GET['category_name'];
        if(isset($_GET['product_name'])){
            $product_name = $_GET['product_name'];
            $product_category = $_GET['product_category'];
            $product_code = $_GET['product_code'];
            $product_entry_date = $_GET['product_entry_date'];

            $sql1 = "INSERT INTO product (product_name, product_category, product_code, product_entry_date) VALUES ('$product_name', '$product_category', '$product_code', '$product_entry_date')";

            if($conn->query($sql1) === TRUE){
                echo 'data inserted successfully';
            } else {
                echo 'Data Not iserted';
            }
            // echo $category_entrydate;
        }
        


    ?>

    <?php
        $sql = "SELECT * FROM category";

        $query = $conn->query($sql);

        // $data = mysqli_fetch_array($query);
        // echo $category_id = $data['category_id'];
        // echo $category_name = $data['category_name'];


    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
        Product: <br>
        <input type="text" name="product_name" required><br><br>
        Product Category: <br>
        <select name="product_category" id="">
            <?php
                while($data = mysqli_fetch_array($query)){
                ;
                $category_id = $data['category_id'];
                $category_name = $data['category_name'];
                echo "<option value='$category_id'>$category_name</option>";
                }
            ?>
            
        </select>
        <!-- <input type="text" name="product_category" required><br><br> -->
        <br><br>
        Product Code: <br>
        <input type="text" name="product_code" required><br><br>
        Product Entry Date: <br>
        <input type="date" name="product_entry_date" required><br><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>