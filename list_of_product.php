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
    <?php
        $sql = "SELECT * FROM product";

        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);
        // echo $data['category_name'];

        echo "<table border = '1'><tr><th>Category</th><th>Date</th><th>Action</th>";

        while($data = mysqli_fetch_assoc($query)){

            $category_id = $data['category_id'];
            $category_name = $data['category_name'];
            $category_entrydate = $data['category_entrydate'];
            echo "<tr><td>$category_name</td><td>$category_entrydate</td><td><a href='edit_category.php?id=$category_id'>Edit</a></td></tr>";
        }
        echo "</tr></table>"


    ?>


    
</body>
</html>