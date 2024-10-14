<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        /* CSS for styling the product list */
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Creates 3 columns for product items */
            gap: 20px;
            margin-top: 50px;
        }

        .product-item {
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-item h3 {
            margin: 10px 0;
            font-size: 1.5rem;
        }

        .product-item p {
            font-size: 1.2rem;
        }

        .product-item .price {
            font-size: 1.5rem;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<!-- Include header.php -->
<?php include 'header.php'; ?>

    <h1 style="text-align:center;">Our Catering Items</h1>
    
    <div class="product-list">
        <!-- Product 1 -->
        <div class="product-item">
            <img src="photos/sausage.jpg" alt="Party Sausage Roll">
            <h3>Party Sausage Roll</h3>
            <p class="price">$3.50 each / $28 per dozen</p>
        </div>
        
        <!-- Product 2 -->
        <div class="product-item">
            <img src="photos/quiche.jpg" alt="Party Quiche Lorraine">
            <h3>Party Quiche Lorraine</h3>
            <p class="price">$3.50 each / $30 per dozen</p>
        </div>

        <!-- Product 3 -->
        <div class="product-item">
            <img src="photos/spinach.jpg" alt="Spinach & Cheese Filo">
            <h3>Spinach & Cheese Filo</h3>
            <p class="price">$3.50 each / $30 per dozen</p>
        </div>

        <!-- Add more products as needed -->
    </div>

</body>
</html>
