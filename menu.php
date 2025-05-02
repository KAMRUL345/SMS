<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        ul{
            display: flex;
            gap: 10px;
        }
        li {
            list-style-type: none;
            padding: 10px;
            margin: 10px;
            font-size: 22px;
            color: red;
        }

        li:hover {
            color: white;
            background-color: black;

        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="list_of_category.php">Product Category List</a></li>
        <li><a href="add_category.php">Product Category Entry</a></li>
        <li><a href="list_of_product.php">Product List</a></li>
        <li><a href="add_product.php">Product Entry</a></li>
    </ul>
    
</body>
</html>